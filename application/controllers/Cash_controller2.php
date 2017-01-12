<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cash_controller extends CI_Controller {
	
	public function Cash_controller()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Casbook_model');
	}
	public function index()
	{
	//$this->load->view('CashHeader_view');	
	$this->load->view('Cashbook_view');
	$data['query'] = $this->Casbook_model->get_details();
	 $this->load->view('CashTable1_view' ,$data);
	}
	
	public function deleterow($row)
	{
		$this->Casbook_model->delete($row);	
		$data['query'] = $this->Casbook_model->get_details();
		$this->load->view('Cashbook_view');
	 $this->load->view('CashTable1_view' ,$data);	
	}
	
	public function editrow($row)
	{
		$query['data2']=$this->Casbook_model->edit($row);	
		$this->load->view('Cashbook1_view',$query);
		$this->load->view('Cashbook_view');
		$data['query'] = $this->Casbook_model->get_details();
	 	$this->load->view('CashTable1_view' ,$data);
	}
	
}
?>