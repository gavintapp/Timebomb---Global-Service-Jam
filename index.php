<?php

include('header.php');
include('form.php');


$output = '<div role="main">';

if ($_GET){
	
	$secret = $_GET['secret']; 
	$email = $_GET['email'];
	$date = $_GET['date'];
	$website = $_GET['website'];
	$warn = $_GET['warn'];
	$remind = $_GET['remind'];
	
	$insert_query = "insert into table (secret,email,date, website) values ('".$secret."','".$email."','".$date."','".$website."','".$warn."','".$remind."')";
	
	$output .= $insert_query;
	
	} else {

$output .= $form;

	};

$output .= "</div>";



echo $output;

include('footer.php');


?>