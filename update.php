<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$x="select * from book";
$result=mysqli_query($con,$x);
$num=mysqli_num_rows($result);
?>
<html>
<head>
<title>
Update Book Records
</title>
<link rel="stylesheet" type="text/css" href="viewstyle.css" />
</head>
<body>
<center>
<h1>BOOK RECORD MANAGEMENT</h1>
<form action="updation.php" method="post">
<table id="table">
<tr>
<th>BOOK ID</th>
<th>TITLE</th>
<th>PRICE</th>
<th>AUTHOR NAME</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	?>
<tr>
<td><input type="hidden" value="<?php echo $row['bookid'];?>" name="id<?php echo $i; ?> />"</td>
<td><input type="text" value="<?php echo $row['title'];?>" name="title<?php echo $i; ?>" /></td>
<td><input type="text" value="<?php echo $row['price'];?>" name="price<?php echo $i; ?>" /></td>
<td><input type="text" value="<?php echo $row['author'];?>" name="author<?php echo $i; ?>" /></td>
</tr>
<?php 
}
mysqli_close($con); ?>
<tr>
<td colspan="4"><input type="submit" value="update" /></td>
</tr>
</table>
</form>
<br/>
Home page<a href="home.php">click here</a><Br/>
</center>
</body>
</html>