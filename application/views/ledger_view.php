
<?php	
		
		if($this->input->post("formSubmit")== "Save") 
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
				
				$varLedType =$this->input->post("ledType");
				$varLedName = $this->input->post("ledName");
				$varLedNum = $this->input->post("ledNum");
				$varDescri =$this->input->post("description");
				
				if(empty($errorMessage)) 
				{				
				
					$this->ledger_model->save_details(				$varLedType,$varLedName,$varLedNum,			 				$varDescri);
				
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
        header {
			color:#FFF;
	background-color:#093;
	height: 25%;
	width: 100%;
	text-align: center;
	padding-top: 25px;
        }
        #titleBar {
	height: 50px;
	width: 100%;
	background-color:#0C0;
	color:#FFF;
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
            
            <div id="titleBar">Mahallu Account
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/cashbook'" id="butt" name="cashbook" >Cashbook</button>
                &nbsp;
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/ledger'" id="butt" name="ledger">Ledger</button>
&nbsp;
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/trial'" id="butt" name="ledger">Trialbalance</button>
</div>
        
<div id="tab">


<center>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="cashbook">
<table width="75%" border="1"  >  
  <tr >
    <th width="5%">Entry No.</th>
    
   
    <th width="10%">Ledger Type</th>
    <th width="10%">Ledger Name</th>
    <th width="10%">Ledger No.</th>
    <th width="10%">Description</th>
    
  </tr>

  <tr>
   <?php $i=1; ?>
    <td scope="col"><?php echo $i ; ?></td>
       <td scope="col"><select name="ledType">
    				<option value="Debit">Debit</option>
  					<option value="Credit">Credit</option>
    				</select></td>
    <td scope="col"><input name="ledName" type="text" value=""></td>
    <td scope="col"><input name="ledNum" type="text" value=""></td>
    <td scope="col"><textarea name="description" cols="" rows=""></textarea></td>
    
  </tr>
</table>
<p>
<input name="formSubmit" type="submit" value="Save">
</p>
</form>
</center>
</body>
</html>