<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
	label,a 
	{
		font-family : Arial, Helvetica, sans-serif;
		font-size : 24px; 
	}
	#butt{
	height: 30px;
	width: 200px;
	color: #03F;
	text-decoration: blink;
	border: thin dotted #666;
	display: table;
	font-weight: bold;
	font-variant: small-caps;
	text-transform: none;
	background-color: #CCC;
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>

</head>

<body>
<div id="container">
<header>


  <h1>MAHALLU MANAGEMENT</h1>
  
</header>
            
            <div id="titleBar">Welcome...</div>
</div>       
<center>
<div id=butt1>
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/cashbook'" id="butt" name="cashbook">Cashbook</button><br><br>
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/ledger'" id="butt" name="ledger">Ledger</button><br><br>
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/trial'" id="butt" name="ledger">Account Statements</button><br><br>
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/receipt'" id="butt" name="receipt">Receipt</button><br><br>
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/voucher'" id="butt" name="voucher">Voucher</button><br><br>
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/under1'" id="butt" name="Report">Report</button><br><br>
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/under2'" id="butt" name="user">User Management</button><br><br>

</div>
</center>
</body>
</html>