<?php
class ControllerExtensionPaymentPayHere extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/payhere');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_payhere', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
			
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_rec_startup_fee_add'] = $this->language->get('text_rec_startup_fee_add');
		$data['text_rec_startup_fee_ignore'] = $this->language->get('text_rec_startup_fee_ignore');

		$data['entry_merchant_id'] = $this->language->get('entry_merchant_id');
        $data['entry_test'] = $this->language->get('entry_test');
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_pending_status'] = $this->language->get('entry_pending_status');
		$data['entry_canceled_status'] = $this->language->get('entry_canceled_status');
		$data['entry_failed_status'] = $this->language->get('entry_failed_status');
		$data['entry_chargeback_status'] = $this->language->get('entry_chargeback_status');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_onsite_checkout'] = $this->language->get('entry_onsite_checkout');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_payhere_id'] = $this->language->get('entry_payhere_id');
		$data['entry_secret'] = $this->language->get('entry_secret');
		$data['entry_custnote'] = $this->language->get('entry_custnote');

		$data['help_test'] = $this->language->get('help_test');
		$data['help_onsite_checkout'] = $this->language->get('help_onsite_checkout');
		$data['help_total'] = $this->language->get('help_total');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/payhere', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/payhere', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_payhere_merchant_id'])) {
			$data['payment_payhere_merchant_id'] = $this->request->post['payment_payhere_merchant_id'];
		} else {
			$data['payment_payhere_merchant_id'] = $this->config->get('payment_payhere_merchant_id');
		}

		if (isset($this->request->post['payment_payhere_secret'])) {
			$data['payment_payhere_secret'] = $this->request->post['payment_payhere_secret'];
		} else {
			$data['payment_payhere_secret'] = $this->config->get('payment_payhere_secret');
		}
        
        if (isset($this->request->post['payment_payhere_status'])) {
			$data['payment_payhere_status'] = $this->request->post['payment_payhere_status'];
		} else {
			$data['payment_payhere_status'] = $this->config->get('payment_payhere_status');
		}

		if (isset($this->request->post['payment_payhere_onsite_checkout'])) {
			$data['payment_payhere_onsite_checkout'] = $this->request->post['payment_payhere_onsite_checkout'];
		} else {
			$data['payment_payhere_onsite_checkout'] = $this->config->get('payment_payhere_onsite_checkout');
		}
		
        if (isset($this->request->post['payment_payhere_test'])) {
			$data['payment_payhere_test'] = $this->request->post['payment_payhere_test'];
		} else {
			$data['payment_payhere_test'] = $this->config->get('payment_payhere_test');
		}

		if (isset($this->request->post['payment_payhere_total'])) {
			$data['payment_payhere_total'] = $this->request->post['payment_payhere_total'];
		} else {
			$data['payment_payhere_total'] = $this->config->get('payment_payhere_total');
		}

		if (isset($this->request->post['payment_payhere_order_status_id'])) {
			$data['payment_payhere_order_status_id'] = $this->request->post['payment_payhere_order_status_id'];
		} else {
			$data['payment_payhere_order_status_id'] = $this->config->get('payment_payhere_order_status_id');
		}

		if (isset($this->request->post['payment_payhere_pending_status_id'])) {
			$data['payment_payhere_pending_status_id'] = $this->request->post['payment_payhere_pending_status_id'];
		} else {
			$data['payment_payhere_pending_status_id'] = $this->config->get('payment_payhere_pending_status_id');
		}

		if (isset($this->request->post['payment_payhere_canceled_status_id'])) {
			$data['payment_payhere_canceled_status_id'] = $this->request->post['payment_payhere_canceled_status_id'];
		} else {
			$data['payment_payhere_canceled_status_id'] = $this->config->get('payment_payhere_canceled_status_id');
		}

		if (isset($this->request->post['payment_payhere_failed_status_id'])) {
			$data['payment_payhere_failed_status_id'] = $this->request->post['payment_payhere_failed_status_id'];
		} else {
			$data['payment_payhere_failed_status_id'] = $this->config->get('payment_payhere_failed_status_id');
		}

		if (isset($this->request->post['payment_payhere_chargeback_status_id'])) {
			$data['payment_payhere_chargeback_status_id'] = $this->request->post['payment_payhere_chargeback_status_id'];
		} else {
			$data['payment_payhere_chargeback_status_id'] = $this->config->get('payment_payhere_chargeback_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_payhere_geo_zone_id'])) {
			$data['payment_payhere_geo_zone_id'] = $this->request->post['payment_payhere_geo_zone_id'];
		} else {
			$data['payment_payhere_geo_zone_id'] = $this->config->get('payment_payhere_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_payhere_sort_order'])) {
			$data['payment_payhere_sort_order'] = $this->request->post['payment_payhere_sort_order'];
		} else {
			$data['payment_payhere_sort_order'] = $this->config->get('payment_payhere_sort_order');
		}

		if (isset($this->request->post['payment_payhere_rid'])) {
			$data['payment_payhere_rid'] = $this->request->post['payment_payhere_rid'];
		} else {
			$data['payment_payhere_rid'] = $this->config->get('payment_payhere_rid');
		}

		if (isset($this->request->post['payment_payhere_custnote'])) {
			$data['payment_payhere_custnote'] = $this->request->post['payment_payhere_custnote'];
		} else {
			$data['payment_payhere_custnote'] = $this->config->get('payment_payhere_custnote');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/payheretpl', $data));
	}
	
	public function install() {
		$this->load->model('extension/payment/payhere');
		$this->model_extension_payment_payhere->install();
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/payhere')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['payment_payhere_merchant_id']) {
			$this->error['email'] = $this->language->get('error_email');
		}

		return !$this->error;
	}
}