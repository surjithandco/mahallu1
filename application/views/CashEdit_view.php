
	

	<?php	
	
		if($this->input->post("formSave")== "Save") 
			{
				$errorMessage = "";
				
				if(empty($this->input->post("date"))) 
				{
					$errorMessage .= "<li>You forgot to enter date!</li>";
				}				
				if(empty($this->input->post("VorR"))) 
				{
					$errorMessage .= "<li>You forgot to select Voucher/Receipt!</li>";
				}
				if(empty($this->input->post("ledType"))) 
				{
					$errorMessage .= "<li>You forgot to select ledger type!</li>";
				}
				if(empty($this->input->post("ledNum"))) 
				{
					$errorMessage .= "<li>You forgot to enter Ledger No.!</li>";
				}				
				if(empty($this->input->post("ledName"))) 
				{
					$errorMessage .= "<li>You forgot to enter Ledger name!</li>";
				}
				if(empty($this->input->post("description"))) 
				{
					$errorMessage .= "<li>You forgot to enter description!</li>";
				}
				if(empty($this->input->post("amount"))) 
				{
					$errorMessage .= "<li>You forgot to enter amount!</li>";
				}
				$varNum = $this->input->post("num");
				$varDate = $this->input->post("date");
				$varVorR = $this->input->post("VorR");
				$varLedType =$this->input->post("ledType");
				$varLedName = $this->input->post("ledName");
				$varLedNum = $this->input->post("ledNum");
				$varDescri =$this->input->post("description");
				$varAmount =$this->input->post("amount");

				if(empty($errorMessage)) 
				{				
				
					$this->Casbook_model->save_updates($varNum, 		           $varDate,$varVorR,$varLedType,$varLedName,$varLedNum,			 				$varDescri,$varAmount);
				
				}
				if(!empty($errorMessage)) 
				{
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
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

<table width="75%" border="1">  
  <tr>
    <th width="5%">Entry No.</th>
    <th width="10%">Date</th>
    <th width="10%"><p>Voucher/Reciept</p></th>
    <th width="10%">Ledger Type</th>
    <th width="10%">Ledger Name</th>
    <th width="10%">Ledger No.</th>
    <th width="10%">Description</th>
    <th width="10%">Amount</th>
     <th width="10%">Action</th>
  </tr>
  
<?php foreach($result as $rows):?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="Editcashbook[]">
  <tr>
   
    <td scope="col"><input name="num" type="text" value="<?php echo $rows->entry_no; ?>" readonly></td>
    <td scope="col"><input name="date" type="date" value="<?php echo $rows->date; ?>"></td>
    <td scope="col"><select name="VorR">
    			<option value="Debit"><?php echo $rows->VorR; ?></option>
    				<option value="Voucher">Voucher</option>
  					<option value="Receipt">Receipt</option>
    				</select></td>
    <td scope="col"><select name="ledType">
    				<option value="Debit"><?php echo $rows->ledger_type; ?></option>
    				<option value="Debit">Debit</option>
  					<option value="Credit">Credit</option>
    				</select></td>
    <td scope="col"><input name="ledName" type="text" value="<?php echo $rows->ledger_name; ?>"></td>
    <td scope="col"><input name="ledNum" type="text" value="<?php echo $rows->ledger_no; ?>"></td>
    <td scope="col"><textarea name="description" cols="" rows="" value="<?php echo $rows->description; ?>"></textarea></td>
    <td scope="col"><input name="amount" type="text" value="<?php echo $rows->amount; ?>"></td>
    
   <td scope="col"> <input name="formSave" type="submit" value="Save"></td>
  </tr>
  </form>
<?php endforeach; ?>
</table>

</center>
</body>
</html>