<?php
//foutmelding aanzetten oefening 2.2)
error_reporting(E_ALL);
ini_set('display_errors', 1);

//database logingegevens
$db_hostname = 'localhost';
$db_username = 'back2_84827';
$db_password = '#1Geheim';
$db_database = 'back2_84827';

//maak de verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

//controleer of de verbinding goed is gegaan
if (!$mysqli)
{
	echo "FOUT: geen connectie naar de database<br/>";
	echo "Error : " . mysqli_connect_error() . "<br/>";
}
?>