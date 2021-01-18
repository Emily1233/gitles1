<?php
require_once 'session.inc.php';
if(isset($_POST['submit']))
{

	require 'config.php';

	$birth_date		= $_POST['birth_date'];
 	$first_name		= $_POST['first_name'];
	$last_name		= $_POST['last_name'];
	$gender			= $_POST['gender'];
	$member_since 	= $_POST['lid_sinds'];
	

    $fout = 0;
	//zijn de variabelen leeg?
	if($birth_date=="" OR $first_name=="" OR $last_name=="" OR $gender=="" OR $member_since=="")
	{
		echo "Niet alle velden zijn ingevuld.<br/>";
		$fout++;
	}

	//is gender iets anders dan m of f?
	if($gender!="M" AND $gender!="F")
	{
		echo "Je hebt geen geslacht ingevuld.<br/>";
		$fout++;
	}

	//is geboortedatum geen datum?
/*	if($birth_date==  )
	{
		echo "Je hebt geen geldige geboortedatum ingevoerd.<br/>";
		$fout++;
	}

	if($member_since==  )
	{
		echo "Je hebt geen geldige datum ingevoerd voor lid sinds.";
		echp "<br/>";
		$fout++;
	}

*/
	if($fout === 0)
	{
		$query = "INSERT INTO back2_leden
				SET birth_date = '$birth_date', 
			  		first_name = '$first_name', 
			  		last_name = '$last_name', 
			  		gender = '$gender', 
			  		member_since = '$member_since'";

	    if(mysqli_query($mysqli, $query)) 
    	{
        	echo "<h2>$first_name is toegevoegd.</h2>";
    	} 
    	else 
    	{
        	echo "<h2>Er is iets foutgegaan.</h2>";
    	}
	}
}
else
{
	echo "Geen formulier verstuurd.<br/>";
}
	echo "<a href='home.php'>Terug naar home</a>";
?>
