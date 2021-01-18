<?php
require_once 'session.inc.php';
require "config.php";

$id = $_GET["id"];

$query = "SELECT * FROM back2_leden WHERE id = $id";

  //vang het resultaat van de query
  $resultaat = mysqli_query($mysqli, $query);

if (mysqli_num_rows($resultaat) == 0)
{
	  echo "Dit lid bestaat niet";
}	
else 
{
	$rij = mysqli_fetch_array($resultaat);

?> 
    <h2>Bewerk hier lid "<?php echo $rij ['first_name'];  ?>" </h2>
    <form action="lid_bewerk_verwerk.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $rij ['id']; ?>"/>     
      <p>Geboortedatum:   <input type="date" name="birth_date"   placeholder="dd/mm/yyyy" value="<?php echo $rij ['birth_date'];  ?>" required /></p>
      <p>Lid sinds:       <input type="date" name="lid_sinds"    placeholder="dd/mm/yyyy" value="<?php echo $rij ['member_since'];  ?>" required /></p>
    	<p>Voornaam:        <input type="text" name="first_name"   placeholder="Voornaam"   value="<?php echo $rij ['first_name'];  ?>" required /></p>
    	<p>Achternaam:      <input type="text" name="last_name"    placeholder="Achternaam" value="<?php echo $rij ['last_name'];  ?>" required /></p>
      <p>Geslacht:  </br> <input type="radio" name="gender" value="F" checked/>F</p>
                          <input type="radio" name="gender" value="M" />M</p>
                          <input type="submit" name="submit" value="pas aan">

<?php
}
  echo "<br/>";
  echo "<br/>";
	echo "<td>Ga terug naar het <a href = 'home.php?'> overzicht</a></td>";
?>