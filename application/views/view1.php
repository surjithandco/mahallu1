<?php	
		
		if($this->input->post("formSubmit")== "Submit") 
			{
				$errorMessage = "";
				
				if(empty($this->input->post("formMovie"))) 
				{
					$errorMessage .= "<li>You forgot to enter a movie!</li>";
				}				
				if(empty($this->input->post("formName"))) 
				{
					$errorMessage .= "<li>You forgot to enter a name!</li>";
				}
				if(empty($this->input->post("formGender"))) 
				{
					$errorMessage .= "<li>You forgot to select your Gender!</li>";
				}
				$varMovie = $this->input->post("formMovie");
				$varName = $this->input->post("formName");
				$varGender =$this->input->post("formGender");

				if(empty($errorMessage)) 
				{				
				//$this->load->model('Movie_model'); # <- add this
				$this->Movie_model->save_details($varMovie,$varName,$varGender);
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
	<title>movie example</title>
	<style>
	label,a 
	{
		font-family : Arial, Helvetica, sans-serif;
		font-size : 12px; 
	}

	</style>	
</head>
<body>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
			<p>
				<label for='formMovie'>favorite movie</label><br/>
				<input type="text" name="formMovie" maxlength="50" value="" />
			</p>
			<p>
				<label for='formName'>Your name</label><br/>
				<input type="text" name="formName" maxlength="50" value="" />
			</p>
			<p>
				<label for='formGender'>Gender</label><br/>
				<input type="text" name="formGender" maxlength="5" value="" />
			</p>
			<input type="submit" name="formSubmit" value="Submit" />
		</form>
	
</body>
</html>