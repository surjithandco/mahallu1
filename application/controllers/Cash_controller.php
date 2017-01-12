
<?php
class Cash_controller extends CI_Controller {
function Cash_controller()
{
	parent::__construct();
	
	$this->load->helper('url');
	$this->load->model('Casbook_model');
	$this->load->model('ledger_model');
	$this->load->model('Voucher_model');
	$this->load->model('Reciept_model');
}
public function index()
{
$this->load->view('Login_view');
}
public function login()
{
	if($this->input->post("user")==$this->input->post("password"))
	{
		$this->load->view('Front_view');
	}
	else
	{
		$this->load->view('Login_view');
	}
}

function cashbook()
{
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
	public function ledgertb($row)
	{
		$data['query']=$this->Casbook_model->get_leddetails($row);
		$this->load->view('LedgerTable_view' ,$data);		
	}
	
	public function editrow($row)
	{
		$query['data2']=$this->Casbook_model->edit($row);
		$this->load->view('Cashbook_view');	
		$this->load->view('Cashbook1_view',$query);
		$data['query'] = $this->Casbook_model->get_details();
	 	$this->load->view('CashTable1_view' ,$data);
		//cashbook();
	}
	function ledger()
	{
	$this->load->view('ledger_view');
	$data['query'] = $this->ledger_model->get_details();
	 $this->load->view('ldtable_view' ,$data);
	}
	public function delete_row($row)
	{
		$this->ledger_model->delete($row);	
		$data['query'] = $this->ledger_model->get_details();
		$this->load->view('ledger_view');
	 $this->load->view('ldtable_view' ,$data);	
	}
	
	public function edit_row($row)
	{
		$query['data2']=$this->ledger_model->edit($row);
		$this->load->view('ledger_view');	
		$this->load->view('ldtableedit_view',$query);
		$data['query'] = $this->ledger_model->get_details();
	 	$this->load->view('ldtable_view' ,$data);
		//$this->ledger();
	}
	function trial()
	{
		$this->load->view('trial_view');
	}
	function trial1()
	{
				$varsDate = $this->input->post("sdate");
				$vareDate= $this->input->post("edate");
				
				
					$data['query']=$this->Casbook_model->search($varsDate,$vareDate);
					$this->load->view('trialtable_view',$data);
				
				
	}
	function receipt()
	{
		$this->load->view('view');	
		$data['query'] = $this->Reciept_model->get_details();   
		$this->load->view('table_view_receipt', $data);
	}
	function voucher()
	{
		$this->load->view('view_voucher');	
		$data['query'] = $this->Voucher_model->get_details();   
		$this->load->view('table_view_voucher', $data);
	}
	function under()
	{
	$this->load->view('Construction_view');
	
	}
	function under1()
	{
		$this->load->view('Construction_view');
		$this->load->view('Report_view');
	
	}
	function under2()
	{
		$this->load->view('Construction_view');
		$this->load->view('user_view');
	
	}
}
?>