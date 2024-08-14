<?php
$host= "127.0.0.1";
$username = "root";
$password = "";
$db_name = "mydb";
$conn = mysqli_connect($host, $username, $password,$db_name);
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
$applicant_name = $_POST['applicant_name'];
$applicant_age = $_POST['applicant_age'];
$applicant_phno = $_POST['applicant_phno'];
$applicant_email = $_POST['applicant_email'];
$gender = $_POST['gender'];
$university = $_POST['university'];
$DOB = date("Y-m-d",strtotime($_POST['DOB']));
$parent = $_POST['gardian_name'];
$address = $_POST['applicant_add'];
$mysql="INSERT INTO applicant_data (applicant_name,applicant_age,applicant_phno,applicant_email,gender,university,DOB,parent,address) VALUES('{$_POST['applicant_name']}','{$_POST['applicant_age']}','{$_POST['applicant_phno']}','{$_POST['applicant_email']}','{$_POST['gender']}','{$_POST['university']}','{$DOB}','{$_POST['gardian_name']}','{$_POST['applicant_add']}')";
 $result = $conn->query($mysql);
if($result === TRUE )
{
	echo "Form Registered Successfully";
}
else
   echo $conn->error;
 mysqli_close($conn);
?>
