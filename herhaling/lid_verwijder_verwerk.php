<?php
require_once 'session.inc.php';
if (isset($_POST['submit']))
{
	require 'config.php';

	$id = $_POST['id'];
	$query = "DELETE FROM back2_leden WHERE id = $id";

	if(mysqli_query($mysqli, $query))
	{
		echo "<h2>Het is gelukt</h2>";
	}
	else
	{
		echo "<h2>Het is niet gelukt</h2>";
	}
}
echo "<br/>";
echo "<a href='home.php?'>Terug naar home</a>";
?>