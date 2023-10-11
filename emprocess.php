<?php
$con=mysqli_connect('localhost','root','','addimission');
?>   
<?php
 if(isset($_POST['submit'])){
     $fname=$_POST['firstName'];
     $lname=$_POST['lastName'];
     $mail=$_POST['email'];
     $pass=$_POST['password'];
     $bd=$_POST['birthday'];
     $gdn=$_POST['gender'];
     $num=$_POST['contact'];
     $adr=$_POST['address'];
    
    
     $sal=$_POST['salary'];
	 
	 $insert="insert into student(firstname,lastname,email,password,birthday,gender,contact,address,salary)values('$fname','$lname','$mail','$pass','$bd','$gdn','$num','$adr','$sal')";
	 
	 $result=mysqli_query($con,$insert);
	 
	 if($result){
	     echo "<script>alert('Registration succesfull')</script>";
		      echo "<script>window.location.href = 'view1.php';</script>";
			  }
			  }
			  
			  ?>