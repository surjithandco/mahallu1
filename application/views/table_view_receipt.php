<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
	<title>Receipt details</title>
	<style>
table {
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
   <caption> All Reciept Details</caption>
	<tr><th>Reciept No.</th>
    <th>Date</th>
    <th>Item</th>
    <th>Amout</th>
    <th>Description</th>
    <th>Action</th></tr>
	<?php foreach($query as $row ): ?>
<tr>   
    <td><?php echo $row->receipt_no; ?></td>
     <td><?php echo $row->date; ?></td>
    <td><?php echo $row->item; ?></td>
    <td><?php echo $row->amount; ?></td>
    <td><?php echo $row->description; ?></td>
    <td><button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/under'" name="print">Print</button></td>
</tr>
<?php endforeach; ?>
	</table>
</body>
</html>