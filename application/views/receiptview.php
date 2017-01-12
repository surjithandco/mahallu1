<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
box {
	font-family: "Times New Roman", Times, serif;
	font-size: 10px;
	text-decoration: underline;
	text-align: center;
}
</style>
</head>

<body>
<box>
<h1>ABC Mahal</h1>
<h2>Receipt</h2>
<p>Date: <?php echo date; ?></p>
<p>Receipt No.: <?php echo receipt_no; ?></p>
<p>Item: <?php echo item; ?></p>
<p>Amount: <?php echo amount; ?></p>
<p><?php echo description; ?></p>

</box>
</body>
</html>