
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
						$varLedNum = $this->input->post("ledger_no");
							
					}
					$this->ledger_model->delete_details($varEntry);
				}
			
		}
		
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cashbook</title>
<style type="text/css">
.fonts {
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
}
</style>
</head>
<body>
<center>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="updatecashbook">
<table width="75%" border="1">
 <tr>
 
    <th width="5%"  colspan="2">Entry No.</th>
    <th width="10%">Ledger Type</th>
    <th width="10%">Ledger Name</th>
    <th width="10%">Ledger No.</th>
    <th width="10%">Description</th>
     <th width="10%">Action</th>
  </tr>

<?php foreach($query as $row):?>
<tr>   
	 
	<td colspan="2"><input  type="checkbox" name="selectRow[]" value="<?php echo $row->entry_no; ?>"><?php echo $row->entry_no; ?></td>
    
    <td><?php echo $row->ledger_type; ?></td>
    <td><?php echo $row->ledger_name; ?></td>
    <td><?php echo $row->ledger_no; ?></td>
    <td><?php echo $row->description; ?></td>
    <td><a href="<?php echo site_url('Cash_controller/delete_row/'.$row->entry_no); ?>"class="fonts">Delete</a> <a href="<?php echo site_url('Cash_controller/edit_row/'.$row->entry_no); ?>" class="fonts">Edit</a><a href="<?php echo site_url('Cash_controller/ledgertb/'.$row->ledger_no); ?>"class="fonts">View</a></td>
 
</tr>
<?php endforeach; ?>
</table>

<form>

</body>
</html>