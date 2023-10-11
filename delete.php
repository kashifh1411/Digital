<?php
$con=mysqli_connect('localhost','root','','addimission');
?>

<?php
$id=$_GET['id'];
$delete="delete from student where id=$id";

$result=mysqli_query($con,$delete);

if($result==true){
      header('location:view1.php');
	  }else{
	   echo "<script>alert('Data Not Deleted')</script>";
	   }
	   ?>
