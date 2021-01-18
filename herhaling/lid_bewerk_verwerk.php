<?php
	require_once 'session.inc.php';

if (isset($_POST['submit']))
{
	require 'config.php';

	$id = $_POST['id'];

	$birth_date		= $_POST['birth_date'];
 	$first_name		= $_POST['first_name'];
	$last_name		= $_POST['last_name'];
	$gender			= $_POST['gender'];
	$member_since 	= $_POST['lid_sinds'];

	$query = "UPDATE back2_leden
			SET birth_date = '$birth_date', 
			  	first_name = '$first_name', 
			  	last_name = '$last_name', 
			  	gender = '$gender', 
				member_since = '$member_since'
			WHERE id = $id";
	
// voer de query uit

	if(mysqli_query($mysqli, $query))
	{
		echo "<h2>$first_name is aangepast</h2>";
	}
	else
	{
		echo "Niet aangepast";
	}
}
echo "<br/>";
echo "<a href='home.php'>Terug naar home</a>";	
?>

