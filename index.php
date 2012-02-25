<?php

include('header.php');
include('form.php');


$output = '<div role="main">';

if ($_GET){
	
	$secret = $_GET['secret']; 
	$notify = $_GET['email'];
	$release_date = $_GET['date'];
	$website = $_GET['website'];
	$warn = $_GET['warn'];
	$remind = $_GET['remind'];
	
	$insert_query = "insert into secrets (secret,notify,release_date, website, warn, remind) values ('".$secret."','".$notify."','".$release_date."','".$website."','".$warn."','".$remind."')";
	
	$link = mysql_connect('localhost', 'timebomb', 'SyLxrEDxab6PfTQa');
	if (!$link) {
	    die('Could not connect: ' . mysql_error());
	}
	
	$db_selected = mysql_select_db('timebomb', $link);
	if (!$db_selected) {
	    die ('Can\'t use timebomb : ' . mysql_error());
	}
	
	$result = mysql_query($insert_query);
	if (!$result) {
   		die('Invalid query: ' . mysql_error());
	}
	
	$output .= "<p>Your secret is safe with us…</p>";
	
	} else {

$output .= $form;

	};

$output .= "</div>";



echo $output;

include('footer.php');


?>