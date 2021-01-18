<?php
require_once 'session.inc.php';
require 'config.php';

$id = $_GET['id'];

	//query om de gebruiker op te halen
	$query = "SELECT * FROM back2_leden WHERE id = $id";

	$resultaat = mysqli_query($mysqli, $query);


//controleer of er 0 of meer rijen zijn
if(mysqli_num_rows($resultaat) == 0)
{
	echo "geen gebruiker met deze id";
} 
else
{
	$rij = mysqli_fetch_array($resultaat);
}

?>

<h2>Verwijder hier lid <?php echo $rij ['first_name']; ?> </h2>
<p>Weet u het zeker?</p>
	<form action="lid_verwijder_verwerk.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $rij ['id']; ?>"/>
		<input type="text" name="Voornaam" value="<?php echo $rij ['first_name']; ?>"/>
		<input type="submit" name="submit" value="ja, ik weet het zeker">
	</form>

<?php
echo "<br/>";
echo "<a href='home.php?'>Terug naar home</a>";
?>