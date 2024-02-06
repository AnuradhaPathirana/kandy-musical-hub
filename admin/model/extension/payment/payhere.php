<?php
class ModelExtensionPaymentPayHere extends Model {
	public function install() {

		$this->load->model('setting/setting');
		
		$defaults = array();

        // Order Status defaults
		$defaults['payment_payhere_order_status_id'] = 5; // Order Complete
		$defaults['payment_payhere_pending_status_id'] = 1;
        $defaults['payment_payhere_canceled_status_id'] = 0;
        $defaults['payment_payhere_failed_status_id'] = 10;
		$defaults['payment_payhere_chargeback_status_id'] = 11;

		$this->model_setting_setting->editSetting('payment_payhere', $defaults);
	}
}
