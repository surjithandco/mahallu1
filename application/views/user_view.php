
<?php	
		
		if($this->input->post("formSubmit")== "Go") 
			{
				$errorMessage = "";
			
				if(empty($this->input->post("sdate"))) 
				{
					$errorMessage .= "<li>You forgot to enter date!</li>";
				}
				if(empty($this->input->post("edate"))) 
				{
					$errorMessage .= "<li>You forgot to enter date!</li>";
				}				
				
				$varsDate = $this->input->post("sdate");
				$vareDate= $this->input->post("edate");
				
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
	width: 125%;
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
	width: 1500px;
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
            
            <div id="titleBar">User Management</div>
        

<leftallign>
<div id="tab">


<left>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="cashbook">

 
<table width="20%" border="1">  
  <tr>
    <th width="15%">User</th>
     <td scope="col"><select name="userfun">
    				<option value="New">New</option>
  					<option value="Delete">Delete</option>
                    <option value="Modify">Modify</option>
                   </select></td>
   
 </tr>
</table>
<table width="75%" border="1">  
  <tr>
    
    <th width="20%">Name</th>
    <th scope="col"><input name="name" type="text" value=""></th>
    </tr>
    <tr>
    <th width="20%">Address</th>
    <th scope="col"><input name="address" type="text" value=""></th>
    </tr>
    <tr>
    
    <th width="20%">Phone No.</th>
    <th scope="col"><input name="phone" type="text" value=""></th>
    </tr>
    <tr>
     <th width="20%">Email id</th>
    <th scope="col"><input name="email" type="text" value=""></th>
    </tr>
    <tr>
     <th width="20%">Username</th>
    <th scope="col"><input name="username" type="text" value=""></th>
    </tr>
    <tr>
   </tr>
    <th width="20%">Password</th>
    <th scope="col"><input name="password" type="text" value=""></th>
    </tr>
   

  </table>
<table width="20%" border="1">
 <tr>
     <th width="20%">Access to:</th>
    
    </tr>
   
 </table>
 <table width="75%" border="1">
 <tr>
  
      <th scope="col"><input name="acc" type="radio" value=""></th>
      <th width="40%">Account</th>
      <th scope="col"><input name="rep" type="radio" value=""></th>
      <th width="40%">Report</th>
        </tr>
  <tr>
  
      <th scope="col"><input name="sur" type="radio" value=""></th>
      <th width="40%">Survey</th>
      <th scope="col"><input name="reg" type="radio" value=""></th>
      <th width="40%">Register</th>
        </tr>
  
 </table>

<input name="formSubmit" type="submit" value="Add">
<input name="formSubmit" type="submit" value="Cancel">
</form>
</center>
</body>
</html>