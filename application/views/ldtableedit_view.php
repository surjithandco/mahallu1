
<?php	
		
		if($this->input->post("formUpdate")== "Update") 
			{
				$errorMessage = "";
				
				
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
				
				$varNum=$this->input->post("num");
				$varLedType =$this->input->post("ledType");
				$varLedName = $this->input->post("ledName");
				$varLedNum = $this->input->post("ledNum");
				$varDescri =$this->input->post("description");
				
				if(empty($errorMessage)) 
				{				
				
					$this->ledger_model->save_updates($varNum,$varLedType,$varLedName,$varLedNum,			 				$varDescri);
				
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
<title>Ledger</title>
<div id="tab1">
<style>
		table {
			margin-top:50px;
	width:700px;
	background-color: #FFF;
	font-family: arial, sans-serif;
	border-collapse: collapse;
    }
	tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<center>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="cashbook">
<table width="75%" border="1">  
  <tr>
    <th width="5%">Entry No.</th>
    <th width="10%">Ledger Type</th>
    <th width="10%">Ledger Name</th>
    <th width="10%">Ledger No.</th>
    <th width="10%">Description</th>
  </tr>

  <tr>
   <?php foreach($data2 as $data1):?>
    <td scope="col"><input name="num" type="text" value="<?php echo $data1->entry_no?>"readonly></td>
    <td scope="col"><select name="ledType">
    				<option value="Debit"><?php echo $data1->ledger_type; ?></option>
    				<option value="Debit">Debit</option>
  					<option value="Credit">Credit</option>
    				</select></td>
    <td scope="col"><input name="ledName" type="text" value="<?php echo $data1->ledger_name; ?>"></td>
    <td scope="col"><input name="ledNum" type="text" value="<?php echo $data1->ledger_no; ?>"></td>
    <td scope="col"><textarea name="description"  value="<?php echo $data1->description; ?>" cols="" rows="" ></textarea></td>
     </tr>
  <?php endforeach; ?>
</table>
<center>
<div id="but">
<input name="formUpdate" type="submit" value="Update">
<input type="reset" value="Reset">
</div>
</center>
</form>

</div>

</div></body>
</html>