<?php

class Movie_model extends CI_Model 
{	
// function: PrepSQL()
		// use stripslashes and mysql_real_escape_string PHP functions
			// to sanitize a string for use in an SQL query
			//
			// also puts single quotes around the string
			
	/*function PrepSQL($value)
	{
		// Stripslashes
		if(get_magic_quotes_gpc()) 
		{
				$value = stripslashes($value);
		}

		// Quote
		$value = "'" . mysql_real_escape_string($value) . "'";

		return($value);
	}*/
	function save_details($varMovie,$varName,$varGender)
	{
		$this->load->database();		
		$data = array(
		'movie' =>$varMovie,
		'name' =>$varName,
		'gender' =>$varGender,
		);
		$this->db->insert("movie_details", $data);
		$this->db->close();			
	}

		
	
	
	function get_details()
	{		
		$this->load->database();				
		 $query=$this->db->get("movie_details");
		 return $query->result(); 
		$this->db->close();					
	}
}	
  ?>