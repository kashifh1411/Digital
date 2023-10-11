<?php

$con=mysqli_connect('localhost','root','','addimission');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from admin WHERE email = '$email' AND password = '$password'";

//echo "$sql";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1){
	

	//echo ("logged in");
	header("Location: view1.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>