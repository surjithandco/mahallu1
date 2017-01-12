
<?php

class ledger_model extends CI_Model 
{	

	function save_details($varLedType,$varLedName,$varLedNum,$varDescri)
	{
		$this->load->database();		
		$data = array('ledger_type'=>$varLedType,
						'ledger_no'=>$varLedNum,
						'ledger_name'=>$varLedName,
						'description'=>$varDescri,
		);
		
		
		$this->db->insert("ledger",$data);
		$this->db->close();			
	}

		
	
	
	function get_details()
	{		
		$this->load->database();				
		 $query=$this->db->get("ledger");
		 return $query->result(); 
		$this->db->close();					
	}
	function delete_details()
	{
		$this->load->database();
		foreach($varEntry as $rw)
		{
			$this->db->delete("ledger", "entry_no = $rw");
			$this->db->close();
			
		}
		
	}
	function delete($var)
	{
			$this->load->database();
			$this->db->delete("ledger", "entry_no = $var");
			$this->db->close();
	}
	function edit($var)
	{
		$this->load->database();
		$result = $this->db->get_where("ledger","entry_no = $var");
		return $result->result(); 	   
		$this->db->close();						
	}
	
	function update_details($varEntry)
	{
		$this->load->database();
		foreach($varEntry as $rws)
		{
			$result = $this->db->get_where("ledger",array('entry_no'=>$rws));
			   return $result->result(); 	   
								
		}
		$this->db->close();	
		
		
	}
	function save_updates($varNum,$varLedType,$varLedName,$varLedNum,$varDescri)
	{
		$this->load->database();		
		$data = array('ledger_type'=>$varLedType,
						'ledger_no'=>$varLedNum,
						'ledger_name'=>$varLedName,
						'description'=>$varDescri,
		);
		
		$this->db->set($data); 
		$this->db->where("entry_no", $varNum); 
		$this->db->update("ledger", $data);
		return ;
		$this->db->close();	
			
	}
	/*function search($first_date,$second_date)
	{
		$this->load->database();
		$this->db->where('date >=', $first_date);
$this->db->where('date <=', $second_date);
 $res=$this->db->get('cashbook');
 return $res->result();
 $this->db->close();	
	}*/
	
}
  ?>