<?php	
		
		if($this->input->post("formSubmit")== "Submit") 
			{
				$errorMessage = "";
				
				if(empty($this->input->post("date"))) 
				{
					$errorMessage .= "<li>Please enter the date</li>";
				}
				
				if(empty($this->input->post("receipt_no"))) 
				{
					$errorMessage .= "<li>Please enter the valid reciept number</li>";
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
				$varRcptno = $this->input->post("receipt_no");
				$varItem = $this->input->post("item");
				$varAmount =$this->input->post("amount");
				$varDescription =$this->input->post("description");
				

				if(empty($errorMessage)) 
				{				
				//$this->load->model('Movie_model'); # <- add this
				$this->Reciept_model->save_details($varDate,$varRcptno,$varItem,$varAmount,$varDescription);
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
	<title>Reciept form</title>
	<style>
	rec
	{
	float : left;
	margin-top: 20px;
	width : 500px;
	height: 450px;
	background-color: #3FC;
	border: 1px solid;
	border-color: #000;
	}
	label,a 
	{  
		font-family : Arial, Helvetica, sans-serif;
		font-size : 18px; 
		
	}

	</style>	
</head>
<body bgcolor="#CFF">
<h1 align="center">Receipt</h1>
	

       
   <rec>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <h2 align="center"> Receipt form </h2>
        <p>
				<label for='date'>Date</label><br/>
				<input type="date" name="date" maxlength="50" value="" />
			</p>
			<p>
				<label for='receipt_no'>receipt_no.</label><br/>
				<input type="number" name="receipt_no" maxlength="50" value="" />
			</p>
			<p>
				<label for='item'>Item</label><br/>
				<input type="text" name="item" maxlength="50" value="" />
			</p>
          <p>
				<label for='description'>Description</label><br/>
              <textarea name="description"></textarea>
			</p>
			<input type="submit" name="formSubmit" value="Submit" />
		</form>
	</rec>
</body>
</html>