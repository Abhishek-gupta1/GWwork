<?php
if(isset($_POST["submit"])){
$roll_no=$_POST['roll_no'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$course=$_POST['course'];
$ssc=$_POST['ssc'];
$hsc=$_POST['hsc'];

$dbconnect = mysqli_connect("localhost","root","","test") or die("connection Failed");
echo $query = "INSERT INTO `student_info`(`Registeration_number`, `Name`, `Address`, `Emailid`, `Gender`, `Contact_No`, `DOB`, `Courses`, `SSC`, `HSC`) VALUES('$roll_no','$name','$address','$email','$gender','$phone','$dob','$course','$ssc','$hsc')";

// $result = mysqli_query($dbconnect,$query);
print_r(mysqli_query($dbconnect,$query));exit();
if(mysqli_affected_rows($dbconnect)>0) {
	echo "Data inseted successfully";
}else{
	echo "Connection failed";
}
}
?>