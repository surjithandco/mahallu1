<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
	<title>Voucher details</title>
	<style>
table {
	margin-top:50px;
	margin-left:auto;
	width:700px;
	background-color: #FFF;
	font-family: arial, sans-serif;
	border-collapse: collapse;
    }

td, th {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    </style>	
</head>
<body>
<table>
   <caption> All Voucher Details</caption>
	<tr><th>Voucher No.</th><th>Date</th><th>Item</th><th>Amount</th><th>Description</tr>
	<?php foreach($query as $row ): ?>
<tr>   
    <td><?php echo $row->voucher_no; ?></td>
    <td><?php echo $row->date; ?></td>
	<td><?php echo $row->voucher_no; ?></td>
    <td><?php echo $row->item; ?></td>
    <td><?php echo $row->amount; ?></td>
    <td><?php echo $row->description; ?></td>
</tr>
<?php endforeach; ?>
	</table>
</body>
</html>