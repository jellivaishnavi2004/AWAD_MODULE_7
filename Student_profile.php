<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "test";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn)
{
die("Connection Failed ")." " .connect_error;
}
else{
$fn = $_POST['fname'];
$mn = $_POST['mname'];
$ln = $_POST['lname'];
$sn = $_POST['sname'];
$name = $fn." ".$mn." ".$ln." ".$sn;
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mblno = $_POST['mblno'];
$mailid = $_POST['mailid'];
$f_name = $_POST['f_name'];
$f_mblno = $_POST['f_mblno'];
$_add = $_POST['address'];
$sql = "insert into stu_info_101(Name, Gender, DOB, MblNo, emailID, Father_Name, Father_MblNo, Address) values('$name', '$gender', '$dob', $mblno, '$mailid', '$f_name', $f_mblno, '$_add')";
if($conn->query($sql) === TRUE)
echo "Congratulations, Registered Successfully !";
else
echo "Error Occurred ! Please Re-register !";
$conn->close();
}
?>