<?php
$firstName=$_POST['fname'];
$lastName =$_POST['lname'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone no.=$_POST['phone'];
/*
if(!empty($firstName|| !empty(lastName)||!empty($password)|| !empty($gender)|| !empty($email)|| !empty($phone)){*/
	
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="register";
	//creation connection//
	$con=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if($con_connect_error()){ 
		echo " No connection";
	}else{
	
		$INSERT="INSERT into singin(firstName,LastName,password,gender,email,phone)"
	}
	$con->close();

?>
