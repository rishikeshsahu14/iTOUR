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
View Book Records
</title>
<link rel="stylesheet" type="text/css" href="viewstyle.css" />
</head>
<body>
<center>
<h1>BOOK RECORD MANAGEMENT</h1>
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
<td><?php echo $row['bookid'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['author'];?></td>
</tr>
<?php 
}
mysqli_close($con); ?>
</table>
<br/>
<h3>Home page<a href="home.php">click here</a><Br/></h3>
</center>
</body>
</html>