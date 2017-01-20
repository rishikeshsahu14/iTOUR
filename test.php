<?php
$id=$_GET['id'];
$dur=$_GET['dur'];
$dist=$_GET['dist'];
$a= mysqli_connect('localhost','root');
mysqli_select_db($a,'brm');
$x="insert into test(id,duration,distance) values($id,'$dur','$dist')";
mysqli_query($a,$x);

mysqli_close($a);


?>