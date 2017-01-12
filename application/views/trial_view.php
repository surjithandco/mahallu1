

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cashbook</title>
</head>
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
	background-color: #093;
	height: 25%;
	width: 100%;
	text-align: center;
	padding-top: 25px;
        }
        #titleBar {
	height: 50px;
	width: 100%;
	background-color: #0c0;
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
            
            <div id="titleBar">Mahallu Cashbook
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/cashbook'" id="butt" name="cashbook" >Cashbook</button>
                &nbsp;
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/ledger'" id="butt" name="ledger">Ledger</button>
&nbsp;
<button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/trial'" id="butt" name="ledger">Trialbalance</button>
</div>
        

<leftallign>
<div id="tab">



<body>
<center>
<form action="<?php echo site_url('Cash_controller/trial1'); ?>" method="post" name="cashbook">
<table width="30%" border="1">  
  <tr>
    
    <th width="15%">Start Date</th>
    
    <th width="15%">End Date</th>
   </tr>

  <tr>
   <?php $i=1; ?>
   
    <td scope="col"><input name="sdate" type="date" value="" required></td>
    <td scope="col"><input name="edate" type="date" value="" required></td>
   </tr>
</table>
<input name="formSubmit" type="submit" value="Go">
</form>
</center>
</body>
</html>