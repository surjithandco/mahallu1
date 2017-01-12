
<?php	
		
		if($this->input->post("formSubmit")== "Go") 
			{
				$errorMessage = "";
			
				if(empty($this->input->post("regno"))) 
				{
					$errorMessage .= "<li>You forgot to enter rgister no.!</li>";
				}
				if(empty($this->input->post("des"))) 
				{
					$errorMessage .= "<li>You forgot to enter description!</li>";
				}				
				
				$varsDate = $this->input->post("regno");
				$vareDate= $this->input->post("des");
				
				if(empty($errorMessage)) 
				{				
				
					$this->Casbook_model->save_details($varDate,
				$varVorR,$varLedType,$varLedName,$varLedNum,			 				$varDescri,$varAmount);
				
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
<style>
	label,a 
	{
		font-family : Arial, Helvetica, sans-serif;
		font-size : 24px; 
	}
        #container {
	height: 300px;
	width: 100%;
	margin-right: auto;
	margin-left: auto;
        }
        header {
	color: #999;
	background-color: #039;
	height: 25%;
	width: 100%;
	text-align: center;
	padding-top: 25px;
        }
        #titleBar {
	height: 50px;
	width: 100%;
	background-color: #99F;
        color: #F06;
        font-size: x-large;
        text-align: center;
	padding-top: 15px;
        }
        
        #main {
	height: 25px;
	width: 2000px;
	background-color: #99F;
        color: #F06;
        font-size: large;
	padding-top: 10px;
        }
	</style>
</head>

<body>

<div id="container">
<header>
  <h1>   MAHALLU MANAGEMENT</h1>
</header>
            
            <div id="titleBar">Report</div>
        

<leftallign>
<div id="tab">


<center>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="cashbook">

 
<table width="30%" border="1">  
  <tr>
    <th width="5%">Report</th>
     <td scope="col"><select name="reporttype">
    				<option value="Marriage">Marriage</option>
  					<option value="Death">Death</option>
                    <option value="Finance">Finance</option>
                    <option value="Survey">Survey</option>
                    <option value="Administrative">Administrative</option>
                    <option value="Subscription">Subscription</option>
    				</select></td>
   
 </tr>
</table>
<table width="75%" border="1">  
  <tr>
    
    <th width="20%">Register No.</th>
    <th scope="col"><input name="regno" type="text" value=""></th>
    
   </tr>

  </table>
<table width="75%" border="1">
  <tr>
    <th width="20%">Description</th>
    <th scope="col"><input name="des" type="text" value=""></th>
   </tr>
</table>
<input name="formSubmit" type="submit" value="Go">
</form>
</center>
</body>
</html>