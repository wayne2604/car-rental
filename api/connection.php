<?php

function Connect()
{
	$dbhost = getenv('DB_HOST') ?: "bxro2chpue00d1awmsy0-mysql.services.clever-cloud.com";
	$dbuser = getenv('DB_USER') ?: "uj5hm7v20dfifu7v";
	$dbpass = getenv('DB_PASSWORD') ?: "xi1GgkRBvMp9on7anxry";
	$dbname = getenv('DB_NAME') ?: "bxro2chpue00d1awmsy0";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	return $conn;
}
?>