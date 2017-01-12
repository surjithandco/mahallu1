<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cash_controller extends CI_Controller {
	
	public function Cash_controller()
	{
		parent::__construct();
		$this->load->model('Casbook_model');
	}
	public function index()
	{
	//$this->load->view('CashHeader_view');	
	$this->load->view('Cashbook_view');
	$data['query'] = $this->Casbook_model->get_details();
	 $this->load->view('CashTable_view' ,$data);
	}
	
		
	
}
?>