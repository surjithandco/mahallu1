
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
		
		
		$this->db->insert("cashbook",$data);
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
	function delete_details($varEntry)
	{
		$this->load->database();
		foreach($varEntry as $rw)
		{
			$this->db->delete("cashbook", "entry_no = $rw");
			$this->db->close();
			
		}
		
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
	
}	
  ?>