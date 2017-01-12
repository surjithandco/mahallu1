
<?php	
		
		if($this->input->post("formDelete")== "Delete")
		{
			$errorMessage = "";
			if(empty($this->input->post("selectRow"))) 
				{
					$errorMessage .= "<li>You forgot to Select a row!</li>";
				}	
				if(!empty($errorMessage)) 
				{
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
				}
				if(empty($errorMessage)) 
				{
					foreach($this->input->post('selectRow') as $rows)
					{
						$varEntry=$this->input->post('selectRow');			
					}
					$this->Casbook_model->delete_details($varEntry);
				}
			
		}
		if($this->input->post("formEdit")== "Edit")
		{
			
			$errorMessage = "";
			if(empty($this->input->post("selectRow"))) 
				{
					$errorMessage .= "<li>You forgot to Select a row!</li>";
				}	
				if(!empty($errorMessage)) 
				{
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
				}
				if(empty($errorMessage)) 
				{
					foreach($this->input->post('selectRow') as $rows)
					{
						$varEntry=$this->input->post('selectRow');			
					}
			$datas['result'] =$this->Casbook_model->update_details($varEntry);
			$this->load->view('CashEdit_view',$datas);
				}
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cashbook</title>
</head>
<body>
<center>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="updatecashbook">
<table width="75%" border="1">
 <tr>
 
    <th width="5%"  colspan="2">Entry No.</th>
    <th width="10%">Date</th>
    <th width="10%"><p>Voucher/Reciept</p></th>
    <th width="10%">Ledger Type</th>
    <th width="10%">Ledger Name</th>
    <th width="10%">Ledger No.</th>
    <th width="10%">Description</th>
    <th width="10%">Amount</th>
  </tr>

<?php foreach($query as $row):?>
<tr>   
	 
	<td colspan="2"><input  type="checkbox" name="selectRow[]" value="<?php echo $row->entry_no; ?>"><?php echo $row->entry_no; ?></td>
    
    <td><?php echo $row->date; ?></td>
    <td><?php echo $row->VorR; ?></td>
    <td><?php echo $row->ledger_type; ?></td>
    <td><?php echo $row->ledger_name; ?></td>
    <td><?php echo $row->ledger_no; ?></td>
    <td><?php echo $row->description; ?></td>
    <td><?php echo $row->amount; ?></td>
</tr>
<?php endforeach; ?>
</table>

<input name="formDelete" type="submit" value="Delete" >
<input name="formEdit" type="submit"  value="Edit">
<form>

</body>
</html>