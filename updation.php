<?php  
$size=sizeof($_POST);
for($i=1;$i<=$size/4;$i++)
{
	$index1="id".$i;
	$id[$i]=$_POST[index1];
	$index2="title".$i;
	$title[$i]=$_POST[index2];
	$index3="price".$i;
	$price[$i]=$_POST[index3];
	$index4="author".$i;
	$author[$i]=$_POST[index4];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
for($i=1;$i<=$size/4;$i++)
{
	$x="update book set title='$title[$i]',price=$price[$i],author='$author[$i]' where bookid=$id[$i]";
	mysqli_query($con,$x);
}
mysqli_close($con);

?>