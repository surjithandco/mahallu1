
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
<title>Ledger</title>
</head>
<body>
<left>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="updatecashbook">
<table width="50%" border="1">
 <tr>
  <th><?php echo $row->ledger_type; ?></th>
    <th><?php echo $row->ledger_name; ?></th>
    <th><?php echo $row->ledger_no; ?></th>
    </tr>
    </table>
    <table width="75%" border="1">
 <tr>
    <th width="5%"  colspan="2">Entry No.</th>
     <th width="10%">Date</th>
     <th width="10%">Amount</th>
    <th width="10%">Description</th>
    
  </tr>

<?php foreach($query as $row):?>
<tr>   
	 
	<td colspan="2"><input  type="checkbox" name="selectRow[]" value="<?php echo $row->entry_no; ?>"><?php echo $row->entry_no; ?></td>
    <td><?php echo $row->date; ?></td>
    <td><?php echo $row->amount; ?></td>
    <td><?php echo $row->description; ?></td>
    
</tr>
<?php endforeach; ?>
</table>

<form>

</body>
</html>