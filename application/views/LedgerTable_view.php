
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
            
            <div id="titleBar">Mahallu Account</div>
        

<leftallign>
<div id="tab">

<body>
<center>

<table width="75%" border="1">
 <tr>
 
    <th width="5%">Entry No.</th>
    <th width="10%">Date</th>
    <th width="10%">Description</th>
    <th width="10%">Amount</th>
     
  </tr>
  
<?php
 foreach($query as $row):?>

<tr>   
	
	
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->date; ?></td>
    <td><?php echo $row->description; ?></td>
    <td><?php echo $row->amount; ?></td>
    
   
</tr>
<?php endforeach;
?>

</table>
<input name="formPrint" type="submit" value="Print" >

</body>
</html>