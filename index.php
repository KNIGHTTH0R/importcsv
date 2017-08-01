<?php

if (get_magic_quotes_gpc())
{
	function stripslashes_deep($value)
	{
		$value = is_array($value) ?
				array_map('stripslashes_deep', $value) :
				stripslashes($value);
		
		return $value;
	}
	
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
	$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
}

if (isset($_POST['submit'])) {

	$host = $_POST['host'];
	$username = $_POST['username'];

	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}
	else {
		$password = '';
	}

	$db = $_POST['db'];

	$link = mysqli_connect("$host", "$username", "$password", "$db");
	if (!$link)
	{
		$error = 'Unable to connect to the database server.' . mysqli_connect_error();
		include 'error.html.php';
		exit();
	}

	$table = mysqli_real_escape_string($link, $_POST['table']);
	$byf = mysqli_real_escape_string($link, $_POST['byf']);
	$byl = mysqli_real_escape_string($link, $_POST['byl']);
	
	$file = $_FILES['file']['tmp_name'];

	if (!$file) {
		$error = 'Error with file uploading';
		include 'error.html.php';
		exit();
	}

	$file = str_replace('\\', '/', $file);

	$sql = "LOAD DATA LOCAL INFILE '" . $file . "' INTO TABLE " . $table . " FIELDS TERMINATED BY '" . $byf . "' LINES TERMINATED BY '" . $byl . "'";

	$res = mysqli_query($link, $sql);

	if (!$res) {
		$error = 'Error import csv file' . mysqli_error($link);
		include 'error.htlm.php';
		exit();
	}
	else {
		$done = 'Successful import!';
		include 'done.html.php';
		exit();
	}
}

include 'insert.html.php';
?>