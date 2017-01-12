<?php	
		
		if(($this->input->post("formSubmit")== "Submit") ||($this->input->post("print")=="print")) 
			{
				$errorMessage = "";
				
				if(empty($this->input->post("date"))) 
				{
					$errorMessage .= "<li>Please enter the date</li>";
				}
				
				if(empty($this->input->post("voucher_no"))) 
				{
					$errorMessage .= "<li>Please enter the valid voucher number</li>";
				}
				
				
				if(empty($this->input->post("item"))) 
				{
					$errorMessage .= "<li>Please enter a name!</li>";
				}
				if(empty($this->input->post("amount"))) 
				{
					$errorMessage .= "<li>Please enter the amount!</li>";
				}
          		$varDate = $this->input->post("date");
				$varRcptno = $this->input->post("voucher_no");
				$varItem = $this->input->post("item");
				$varAmount =$this->input->post("amount");
				$varDescription =$this->input->post("description");
				

				if(empty($errorMessage)) 
				{				
				//$this->load->model('Movie_model'); # <- add this
				$this->Voucher_model->save_details($varDate,$varRcptno,$varItem,$varAmount,$varDescription);
				}
				if(!empty($errorMessage)) 
				{
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
				}
			  
			}
		    
	?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
	<title>Voucher form</title>
	<style>
	rec
	{
	float : left;
	margin-top: 20px;
	margin-left: 20px;
	width : 500px;
	height: 450px;
	background-color: #99F;
	border: 1px solid;
	border-color: #000;
	}
	label,a 
	{  
		font-family : Arial, Helvetica, sans-serif;
		font-size : 18px;
		margin-left:5px; 
		
	}
	tit{
	width: 100%;
	text-align: center;
	border: 5px solid #dedede;
	height: 200px;
	background-color: #F06;
	padding: 10px;
	}

	</style>	
</head>
<body bgcolor="#0099FF">
<div id="tit">
  <h1 align="center">Voucher</h1>
</div>
       
<rec>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <h2 align="center"> Voucher form</h2>
        <p>
				<label for='date'>Date</label><br/>
				<input type="date" name="date" maxlength="50" value="" />
			</p>
			<p>
				<label for='voucher_no'>Voucher No.</label><br/>
				<input type="number" name="voucher_no" maxlength="50" value="" />
			</p>
			<p>
				<label for='item'>Item</label><br/>
				<input type="text" name="item" maxlength="50" value="" />
			</p>
			<p>
				<label for='amount'>Amount</label><br/>
				<input type="number" name="amount" maxlength="5" value="" />
			</p>
          <p>
				<label for='description'>Description</label><br/>
              <textarea name="description"></textarea>
			</p>
			<input type="submit" name="formSubmit" value="Submit" />
            <input onclick="myFunction()" type="submit" name="print" value="print" />
		</form>
	</rec>
   <script>
   function myFunction() {
	   window.print();
	}
	</script>
</body>
</html>