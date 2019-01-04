<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "127.0.0.1:3306";
$dbname		= "chatterbot";
$dbuser		= "root";
$dbpass		= "";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
 
// new data
 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tel = $_POST['tel'];
$address = $_POST['address'];
 
if($fname == '') {
	$errmsg_arr[] = 'You must enter your First Name';
	$errflag = true;
}
if($lname == '') {
	$errmsg_arr[] = 'You must enter your Last Name';
	$errflag = true;
}
if($tel == '') {
	$errmsg_arr[] = 'You must enter your contact number';
	$errflag = true;
}
if($address == '') {
	$errmsg_arr[] = 'You must enter your address';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: info.php");
	exit();
}
// query
$sql = "INSERT INTO members (fname,lname,tel,address) VALUES (:sas,:asas,:asafs,:asasfs)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$fname,':asas'=>$lname,':asafs'=>$tel,':asasfs'=>$address));

 
 
?>