
<?php

class Casbook_model extends CI_Model 
{	

	function save_details($varDate,$varVorR,$varLedType,$varLedName,$varLedNum,$varDescri,$varAmount)
	{
		$this->load->database();		
		$data = array('date'=>$varDate,
						'amount'=>$varAmount,
						'VorR'=>$varVorR,
						'ledger_type'=>$varLedType,
						'ledger_no'=>$varLedNum,
						'ledger_name'=>$varLedName,
						'description'=>$varDescri,
		);
		
		$data1 = array('item'=>$varLedName,
						'amount'=>$varAmount,
						'description'=>$varDescri,);
		$data2= array('date'=>$varDate,
						'led_no'=>$varLedNum,
						'led_name'=>$varLedName,
						'led_type'=>$varLedType,
						'description'=>$varDescri,
						'amount'=>$varAmount,);
		
		$this->db->insert("cashbook",$data);
		$this->db->insert("ledgertb",$data2);
		if($varVorR=='Receipt')
		{
			$this->db->insert("receipt",$data1);
		}
		
		if($varVorR=='Voucher')
		{
			$this->db->insert("voucher",$data1);
		}
		$this->db->close();			
	}

		
	
	
	function get_details()
	{		
		$this->load->database();				
		 $query=$this->db->get("cashbook");
		 return $query->result(); 
		$this->db->close();					
	}
	function get_leddetails($var)
	{		
		$this->load->database();				
		 $query=$this->db->get_where("ledgertb","led_no=$var");
		 return $query->result(); 
		$this->db->close();					
	}
	function delete_details($varEntry)
	{
		$this->load->database();
		foreach($varEntry as $rw)
		{
			$this->db->delete("cashbook", "entry_no = $rw");
			$this->db->close();
			
		}
		
	}
	function delete($var)
	{
			$this->load->database();
			$this->db->delete("cashbook", "entry_no = $var");
			$this->db->close();
	}
	function edit($var)
	{
		$this->load->database();
		$result = $this->db->get_where("cashbook","entry_no = $var");
		return $result->result(); 	   
		$this->db->close();						
	}
	
	function update_details($varEntry)
	{
		$this->load->database();
		foreach($varEntry as $rws)
		{
			$result = $this->db->get_where("cashbook",array('entry_no'=>$rws));
			   return $result->result(); 	   
								
		}
		$this->db->close();	
		
		
	}
	function save_updates($varNum,$varDate,$varVorR,$varLedType,$varLedName,$varLedNum,$varDescri,$varAmount)
	{
		$this->load->database();		
		$data = array('date'=>$varDate,
						'amount'=>$varAmount,
						'VorR'=>$varVorR,
						'ledger_type'=>$varLedType,
						'ledger_no'=>$varLedNum,
						'ledger_name'=>$varLedName,
						'description'=>$varDescri,
		);
		
		$this->db->set($data); 
		$this->db->where("entry_no", $varNum); 
		$this->db->update("cashbook", $data);
		return ;
		$this->db->close();	
			
	}
	function search($first_date,$second_date)
	{
		$this->load->database();
		$this->db->where('date >=', $first_date);
$this->db->where('date <=', $second_date);
 $res=$this->db->get('cashbook');
 return $res->result();
 $this->db->close();	
	}
	
}	
  ?>