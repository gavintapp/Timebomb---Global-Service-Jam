<?php

include('header.php');
include('form.php');


$output = '<div role="main">';

if ($_POST){
	
	$secret = mysql_real_escape_string($_POST['secret']); 
	$notify = mysql_real_escape_string($_POST['email']);
	$release_date = mysql_real_escape_string($_POST['date']);
	$website = mysql_real_escape_string($_POST['website']);
	if (isset($_POST['warn'])) {$warn = mysql_real_escape_string($_POST['warn']);} else {$warn = "";}
	if (isset($_POST['remind'])) {$remind = mysql_real_escape_string($_POST['remind']);} else {$remind = "";}
	
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