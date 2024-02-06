<?php

define('PH_MSG_AUTH_SUCCESS', 'AUTHORIZATION_SUCCESS', false);
define('PH_MSG_AUTH_FAILED', 'AUTHORIZATION_FAILED', false);
define('PH_MSG_REC_INST_SUCCESS', 'RECURRING_INSTALLMENT_SUCCESS', false);
define('PH_MSG_REC_INST_FAILED', 'RECURRING_INSTALLMENT_FAILED', false);
define('PH_MSG_REC_COMPLETE', 'RECURRING_COMPLETE', false);
define('PH_MSG_REC_STOPPED', 'RECURRING_STOPPED', false);

class ControllerExtensionPaymentPayHere extends Controller {
	public function index() {
		$this->load->model('checkout/recurring');
		$this->load->model('checkout/order');

		$this->load->language('extension/payment/payhere');

		$data['button_confirm'] = $this->language->get('button_confirm');
		$data['text_testmode'] = $this->language->get('text_testmode');
		$data['text_recurring_exception_trial'] = $this->language->get('text_recurring_exception_trial');
		$data['text_recurring_exception_unsupported_freq'] = $this->language->get('text_recurring_exception_unsupported_freq');
		$data['text_recurring_exception_unmatching_rec'] = $this->language->get('text_recurring_exception_unmatching_rec');

		$data['has_recurring_products'] = false;	
		$data['has_recurring_exceptions'] = false;
		// Trials are not supported. If this flag is true, 
		// checkout should not happen.
		$data['has_recurring_exception_trial'] = false;
		// There are unsupported frequencies in recurring profiles. 
		// If this flag is true, checkout should not happen.
		$data['has_recurring_exception_unsupported_freq'] = false;
		// There are unmatching recurring terms in the cart.
		// If this flag is true, checkout should not happen.
		$data['has_recurring_exception_unmatching_rec'] = false;
		$data['recurring_startup'] = 0;

		$data['testmode'] = $this->config->get('payment_payhere_test');
		if (!$this->config->get('payment_payhere_test')) {
			$data['action'] = 'https://www.payhere.lk/pay/checkout';
			$data['sandbox'] = false;
		} else {
			$data['action'] = 'https://sandbox.payhere.lk/pay/checkout';
			$data['sandbox'] = true;
		}

		$data['merchant_id'] = $this->config->get('payment_payhere_merchant_id');
		$data['is_onsite_checkout_enabled'] = $this->config->get('payment_payhere_onsite_checkout');
		$data['platform'] = 'opencart';
		$data['description'] = $this->config->get('config_name');
		$data['transaction_id'] = $this->session->data['order_id'];
		$data['return_url'] = $this->url->link('checkout/success', '', true);
		$data['cancel_url'] = $this->url->link('checkout/checkout', '', true);
		$data['status_url'] = $this->url->link('extension/payment/payhere/callback', '', true);
		$data['language'] = $this->session->data['language'];
		$data['logo'] = $this->config->get('config_url') . 'image/' . $this->config->get('config_logo');

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		$data['email'] = $order_info['email'];
		$data['firstname'] = $order_info['payment_firstname'];
		$data['lastname'] = $order_info['payment_lastname'];
        if ($order_info['payment_address_2']) {
            $data['address'] = $order_info['payment_address_1'] . ", " . $order_info['payment_address_2'];
        }
        else {
            $data['address'] = $order_info['payment_address_1'];
        }
		$data['address1'] = $order_info['payment_address_1'];
		$data['address2'] = $order_info['payment_address_2'];
		$data['phone_number'] = $order_info['telephone'];
		$data['postal_code'] = $order_info['payment_postcode'];
		$data['city'] = $order_info['payment_city'];
		$data['state'] = $order_info['payment_zone'];
		$data['country'] = $order_info['payment_iso_code_3'];
		$data['amount'] = ($this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false));
		$data['currency'] = $order_info['currency_code'];

		$products = array();
		foreach ($this->cart->getProducts() as $product) {
			$products[] = $product['name'];
		}
		$data['items_text'] = implode( ', ', $products);;

		$data['order_id'] = $this->session->data['order_id'];

		if ($this->cart->hasRecurringProducts()){
			$data['has_recurring_products'] = true;

			$all_products = $this->cart->getProducts();
	
			$data['amount'] = 0;
			$data['recurring_recurrence'] = null;
			$data['recurring_duration'] = null;
			$data['recurring_startup'] = 0;

			$recurring_order_ids = array();
			foreach ($all_products as $p){

				if ($p['recurring']){
					
					$recurring_info = $p['recurring'];
		
					$rec_has_trial = $recurring_info['trial'] == '1';
					$rec_freq = strtolower($recurring_info['frequency']);
		
					// Check for recurring profiles with trial periods
					if ($rec_has_trial){
						$data['has_recurring_exceptions'] = true;
						$data['has_recurring_exception_trial'] = true;

						// Stop processing this recurring product
						continue;
					}
		
					// Check for compatible freq
					$rec_is_freq_compatible = in_array($rec_freq, $this->get_compatible_recurring_frequencies());
					if (!$rec_is_freq_compatible){
						$data['has_recurring_exceptions'] = true;
						$data['has_recurring_exception_unsupported_freq'] = true;

						// Stop processing this recurring product
						continue;
					}

					$rec_recurrence = $this->getRecurrenceTermForProducts($p);
					$rec_duration = $this->getDurationTermForProducts($p);

					if (is_null($data['recurring_recurrence'])){
						$data['recurring_recurrence'] = $rec_recurrence;
					}
					else if ($data['recurring_recurrence'] != $rec_recurrence){
						$data['has_recurring_exception_unmatching_rec'] = true;

						// Stop processing this recurring product
						continue;
					}

					if (is_null($data['recurring_duration'])){
						$data['recurring_duration'] = $rec_duration;
					}
					else if ($data['recurring_duration'] != $rec_duration){
						$data['has_recurring_exception_unmatching_rec'] = true;

						// Stop processing this recurring product
						continue;
					}

					$data['amount'] += ($this->currency->format(($p['recurring']['price'] * $p['quantity']), $data['currency'], $order_info['currency_value'], false));

					// We want the contents of the 'recurring field inside $p
					// to be at the root level of the object.
					$temp_obj = array_merge($p, $p['recurring']);
					unset($temp_obj['recurring']);

					$recurring_order_id = $this->model_checkout_recurring->addRecurring(
						$data['order_id'], 			// Parent Order ID
						'PayHere Subscription', 	// Description
						$temp_obj); 				// Data
					$recurring_order_ids[] = $recurring_order_id;
				}
				$data['recurring_startup'] += $this->currency->format(($p['total']), $data['currency'], $order_info['currency_value'], false);
			}

			$data['custom_1'] = implode(',', $recurring_order_ids);
		}
		
        if ($order_info) {
			$data['item_name'] = html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8');
			$data['products'] = array();
			foreach ($this->cart->getProducts() as $product) {
				/**
				 * Removing $option_data retrieval.
				 * $option_data made the HTML form parameter list too large.
				 */
				$data['products'][] = array(
					'name'     => htmlspecialchars($product['name']),
					'model'    => htmlspecialchars($product['model']),
					'price'    => ($this->currency->format($product['price'], $order_info['currency_code'], false, false)),
					'quantity' => $product['quantity'],
					'option'   => array(),
					'weight'   => $product['weight']
				);
			}
			$data['discount_amount_cart'] = 0;
			$total = $this->currency->format($order_info['total'] - $this->cart->getSubTotal(), $order_info['currency_code'], false, false);
			if ($total > 0) {
				/**
				 * Redundant product details setting
				 */
				/*
				$data['products'][] = array(
					'name'     => $this->language->get('text_total'),
					'model'    => '',
					'price'    => $total,
					'quantity' => 1,
					'option'   => array(),
					'weight'   => 0
				);*/
			} else {
				$data['discount_amount_cart'] -= $total;
			}
		}

		// Add Hash for extra security
		$payhere_secret = strtoupper(md5($this->config->get('payment_payhere_secret')));
		$payhere_amount = number_format($data['amount'] + $data['recurring_startup'], 2, '.', '');
		$hash = strtoupper(md5($data['merchant_id'] . $data['order_id'] . $payhere_amount . $data['currency'] . $payhere_secret));
		$data['hash'] = $hash;

		return $this->load->view('extension/payment/payheretpl', $data);
	}

	/**
	 * Returns a list of compatible frequencies for 
	 * recurring profiles
	 */
	public function get_compatible_recurring_frequencies(){
		return array(
			'week', 'month', 'year'
		);
	}

	/**
	 * Returns the payhere recurrence term for the provided product.
	 * 
	 * @param any $product
	 * @return string
	 */
	public function getRecurrenceTermForProducts($product){
		$rec_freq = strtolower($product['recurring']['frequency']);
		$rec_cycle = $product['recurring']['cycle'];

		return $rec_cycle . ' ' . ucfirst($rec_freq);
	}

	/**
	 * Returns the payhere duration term for the provided product.
	 * 
	 * @param any $product
	 * @return string
	 */
	public function getDurationTermForProducts($product){
		$rec_freq = strtolower($product['recurring']['frequency']);
		$rec_cycle = (int)$product['recurring']['cycle'];
		$rec_duration = (int)$product['recurring']['duration'];

		if (is_null($rec_duration) || empty($rec_duration) || $rec_duration == '0'){
			return 'Forever';
		}

		return ($rec_cycle * $rec_duration) . ' ' . ucfirst($rec_freq);
	}

	/**
	 * Returns all Recurring Orders that match with the given reference.
	 * The default version implemented by OpenCart returns only one 
	 * record. 
	 * See https://github.com/opencart/opencart/blob/master/upload/catalog/model/account/recurring.php
	 * 
	 * @param string $reference
	 * @return array
	 */
	public function getAllRecurringOrdersByReference($reference) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_recurring` WHERE `reference` = '" . $this->db->escape($reference) . "'");
		return $query->rows;
	}

	/**
	 * Sets the status of all recurring order obects. The recurring order
	 * objects must be a set of rows returned from the OpenCart `order_recurring` table.
	 * 
	 * @param array $recurringOrders An array of rows returned from the `_order_recurring` table.
	 * @param int $status A valid status code for the orders
	 */
	public function setStatusForAllRecurringOrders($recurringOrders, $status){
		foreach ($recurringOrders as $ro){
			$order_recurring_id = $ro['order_recurring_id'];
			$this->model_account_recurring->editOrderRecurringStatus($order_recurring_id, $status);
		}
	}

	/**
	 * Add order transactions for all recurring order obects. The recurring order
	 * objects must be a set of rows returned from the OpenCart `order_recurring` table.
	 * 
	 * @param array $recurringOrders An array of rows returned from the `_order_recurring` table.
	 * @param int $type A valid type for the order transaction
	 */
	public function addTransactionForAllRecurringOrders($recurringOrders, $type){
		foreach ($recurringOrders as $ro){
			$order_recurring_id = $ro['order_recurring_id'];
			$this->model_account_recurring->addOrderRecurringTransaction($order_recurring_id, $type);
		}
	}

	public function callback() {
		$this->log->write('PayHere Payment Gateway Callback Reached');

		$is_subscription = isset($this->request->post['subscription_id']);

		if (isset($this->request->post['order_id'])) {
			$order_id = $this->request->post['order_id'];
		} else {
			$order_id = 0;
		}

		$this->load->model('account/recurring');
		$this->load->model('checkout/recurring');
		$this->load->model('checkout/order');

		$status_code = $this->request->post['status_code'];
		$order_info = $this->model_checkout_order->getOrder($order_id);

		if ($order_info) {

			$verified = true;

			// md5sig validation
			if ($this->config->get('payhere_secret')) {
				$hash  = $this->request->post['merchant_id'];
				$hash .= $this->request->post['order_id'];
				$hash .= $this->request->post['payhere_amount'];
				$hash .= $this->request->post['payhere_currency'];
                $hash .= $status_code;
                $hash .= strtoupper(md5($this->config->get('payment_payhere_secret')));
                
				$md5hash = strtoupper(md5($hash));
				$md5sig = $this->request->post['md5sig'];

				if ($is_subscription){
					if (
						($md5hash != $md5sig) || 
						(strtolower($this->request->post['merchant_id']) != strtolower($this->config->get('payment_payhere_merchant_id')))) {
						$verified = false;
					}
				}
				else{
					if (
						($md5hash != $md5sig) || 
						(strtolower($this->request->post['merchant_id']) != strtolower($this->config->get('payment_payhere_merchant_id'))) || 
						((float)$this->request->post['payhere_amount'] != $this->currency->format((float)$order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false))) {
						$verified = false;
					}
				}
			} 

			if ($verified) {

				// MARK: Start Adding Order History

				$comment = '';

				if ($is_subscription && isset($this->request->post['message_type'])){
					$subscription_id = $this->request->post['subscription_id'];
					$msg_type = $this->request->post['message_type'];
					$ph_amount = $this->request->post['payhere_amount'];
					$ph_currency = $this->request->post['payhere_currency'];

					if ($msg_type == PH_MSG_AUTH_SUCCESS){
						$comment = 'Your order with PayHere Subscription ID "'. $subscription_id .'" was successfully authorized for recurring payments';
					}
					else if ($msg_type == PH_MSG_AUTH_FAILED){
						$comment = 'Your order with PayHere Subscription ID "'. $subscription_id .'" failed authorization for recurring payments';
					}
					else if ($msg_type == PH_MSG_REC_INST_SUCCESS){
						$comment = 'A recurring installment of ' . $ph_currency . ' ' . $ph_amount . ' for your order with PayHere Subscription ID "'. $subscription_id .'" was successful';
					}
					else if ($msg_type == PH_MSG_REC_INST_FAILED){
						$comment = 'A recurring installment of ' . $ph_currency . ' ' . $ph_amount . ' for your order with PayHere Subscription ID "'. $subscription_id .'" failed';
					}
					else if ($msg_type == PH_MSG_REC_COMPLETE){
						$comment = 'Recurring payments for your order with PayHere Subscription ID "'. $subscription_id .'" are complete';
					}
					else if ($msg_type == PH_MSG_REC_STOPPED){
						$comment = 'Recurring payments stopped for your order with PayHere Subscription ID "' . $subscription_id . '"';
					}
				}
				else if (!$is_subscription && $status_code != '2'){

					// Add order history comment for non-subscription & non-successful payments.

					$status_name		= array('charged back', 'failed', 'canceled', 'pending', '', '', 'success')[$status_code + 3];
					$status_message 	= $this->request->post['status_message'];
					$method 			= $this->request->post['method'];
					$payment_id 		= $this->request->post['payment_id'];
					
					if ($method == 'TEST'){
						// Test payments do not contain card details.
						// Only payments made with VISA/MASTER on 
						// live environments.

						$comment = sprintf(
							'Test Payment %s due to reason "%s". Transaction information: ' .
							'Method = %s, Payment ID = %s',
							$status_name,
							$status_message,
							$method,
							$payment_id
						);
					}
					else{
						$card_holder_name 	= $this->request->post['card_holder_name'];
						$card_no 			= $this->request->post['card_no'];
						$card_expiry 		= $this->request->post['card_expiry'];

						$comment = sprintf(
							'Payment %s due to reason "%s". Transaction information: ' .
							'Method = %s, Payment ID = %s, Card Holder Name = %s, Card No = %s, Card Expiry = %s',
							$status_name,
							$status_message,
							$method,
							$payment_id,
							$card_holder_name,
							$card_no,
							$card_expiry
						);
					}


				}

				switch($status_code) {
					case '2':
						$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_payhere_order_status_id'), $comment, true);
						break;
					case '0':
						$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_payhere_pending_status_id'), $comment, true);
						break;
					case '-1':
						$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_payhere_canceled_status_id'), $comment, true);
						break;
					case '-2':
						$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_payhere_failed_status_id'), $comment, true);
						break;
					case '-3':
						$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_payhere_chargeback_status_id'), $comment, true);
						break;
				}

				// MARK: End Adding order History
				// MARK: Start Recurring Order Transactions

				if ($is_subscription){

					// Add the correct payment references to
					// recurring order ids
					$recurring_order_ids = explode(',', $this->request->post['custom_1']);
					foreach ($recurring_order_ids as $rec_order_id){
						$this->model_checkout_recurring->editReference($rec_order_id, $subscription_id);
					}

					// Change Recurring Order Status Below
					$recurring_orders = $this->getAllRecurringOrdersByReference($subscription_id);
					
					$ph_status_code = (int)$status_code;
					$ph_msg_type = $this->request->post['message_type'];

					$status_for_rec_orders = null;
					$rec_transaction_type_for_rec_orders = null;

					if ($ph_status_code == 2 && $ph_msg_type == PH_MSG_REC_INST_SUCCESS){
						$status_for_rec_orders = 1; $rec_transaction_type_for_rec_orders = 1;
					}
					else if ($ph_status_code == 2 && $ph_msg_type == PH_MSG_REC_COMPLETE){
						$status_for_rec_orders = 5; $rec_transaction_type_for_rec_orders = 9;
					}
					else if ($ph_status_code == 2){
						$status_for_rec_orders = 1;
					}
					else if ($ph_status_code == 0){
						$status_for_rec_orders = 6;
					}
					else if ($ph_status_code == -1){
						$status_for_rec_orders = 3;
					}
					else if ($ph_status_code == -2 && $ph_msg_type == PH_MSG_REC_INST_FAILED){
						$status_for_rec_orders = 1; $rec_transaction_type_for_rec_orders = 4;
					}
					else if ($ph_status_code == -2 && $ph_msg_type == PH_MSG_REC_STOPPED){
						$status_for_rec_orders = 3; $rec_transaction_type_for_rec_orders = 4;
					}
					else if ($ph_status_code == -2 || $ph_status_code == -3){
						$status_for_rec_orders = 3;	
					}

					if (isset($status_for_rec_orders)){
						$this->setStatusForAllRecurringOrders($recurring_orders, $status_for_rec_orders);
					}
					if (isset($rec_transaction_type_for_rec_orders)){
						$this->addTransactionForAllRecurringOrders($recurring_orders, $rec_transaction_type_for_rec_orders);
					}
				}

				// MARK: End Recurring Order Transactions
			} 
			else {
				$this->log->write('md5sig returned (' + $md5sig + ') does not match generated (' + $md5hash + '). Verify Manually. Current order state: ' . $this->config->get('config_order_status_id'));
			}

		}
		else{
			$this->log->write('Error: PayHere Callback could not extract orderinfo for order_id "' . $order_id . '"');
		}
	}
}
