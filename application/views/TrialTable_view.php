

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cashbook</title>
<style type="text/css">
.bal {
	text-align: right;
}
</style>
</head>
<body>
<center>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="updatecashbook">
<table width="45%" border="1">
 <tr>
 
    <th width="15%">Account</th>
    <th width="10%">Date</th>
    <th width="10%">Credit</th>
    <th width="10%">Debit</th>
  </tr>
<?php $varc=0; $vard=0;?>
<?php foreach($query as $row):?>
<tr>  
	<td><?php echo $row->ledger_name; ?></td>
    <td><?php echo $row->date; ?></td>
      <?php
	  
	if($row->ledger_type=="Credit"){
	?>
    <td><?php echo $row->amount;$varc=$varc+$row->amount;?></td>
     <td><?php ?></td>
     <?php }?>
    <?php 
	if($row->ledger_type=="Debit")
	{?>
     <td><?php ?></td>
     <td><?php echo $row->amount;$vard=$vard+$row->amount;?></td>
    <?php }?>
</tr>
<?php endforeach;?>
<tr><td colspan="2">Total</td>
	<td class="bal"><?php echo $varc; ?></td>
    <td class="bal"><?php echo $vard; ?></td></tr>
<tr><td colspan="2">Balance</td>
	<td colspan="2" class="bal"><?php echo $varc-$vard; ?></td></tr>
</table>

<input name="formDelete" type="submit" value="Print" >

<form>

</body>
</html>