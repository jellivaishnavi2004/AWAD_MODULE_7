<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "test";
$conn = new mysqli($host, $user, $password, $db);
if(!$conn)
{
die("Connection Failed");
}
else
{
$sid = $_POST['stuid'];
$sql = "select * from stu_info_101 where stuID = ".$sid;
$rs = $conn->query($sql);
if($rs->num_rows>0)
{
$rec = $rs->fetch_assoc();
echo "<table border=1 align=center cellspacing=5 cellpadding=5>
<tr>
<td colspan=2 align='center'>".$rec['Name']."'s Profile</td>
</tr>
<tr>
<td>Name</td>
<td>".$rec['Name']."</td>
</tr>
<tr>
<td>Student ID</td>
<td>".$rec['stuID']."</td>
</tr>
<tr>
<td>Gender</td>
<td>".$rec['Gender']."</td>
</tr>
<tr>
<td>Date of Birth</td>
<td>".$rec['DOB']."</td>
</tr>
<tr>
<td>Mobile Number</td>
<td>".$rec['MblNo']."</td>
</tr>
<tr>
<td>e-mail ID</td>
<td>".$rec['emailID']."</td>
</tr>
<tr>
<td>Father Name</td>
<td>".$rec['Father_Name']."</td>
</tr>
<tr>
<td>Father's Mobile Number</td>
<td>".$rec['Father_MblNo']."</td>
</tr>
<tr>
<td>Address</td>
<td>".$rec['Address']."</td>
</tr>
</table>";
}
else
{
echo "No data found !";
}
$conn->close();
}
?>