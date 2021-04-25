<?php
$u = $_POST['username'];
$p = $_POST['password'];

$db = mysqli_connect("localhost","root","","anhtuan");
    $sql = "select * from user WHERE username = '$u' and password = '$p'";
     $rs = mysqli_query($db,$sql);
     
     if(mysqli_num_rows($rs) > 0){
     	echo "<h1> aaaaaa </h1>";
     }
     else {
     	echo "<h2>44444</h2>";
     }
?>