<?php
// database connection code
if(isset($_POST['cname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$cname = $_POST['cname'];
$ctype = $_POST['ctype'];
$cphone = $_POST['cphone'];
$ccombo = $_POST['ccombo'];
$corders = $_POST['corders'];
$ccomments = $_POST['ccomments'];

// database insert SQL code
$sql = "INSERT INTO tbl_contact ('cname', 'cphone', 'ctype', 'ccombo', 'corders','ccomments') VALUES ('$cname', '$cphone', '$ctype', '$ccombo','$corders','$ccomments')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Total bill - 150rs";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>