<?php
require_once 'session.inc.php';
require 'config.php';
//link:  https://84827.ict-lab.nl/back2/herhaling/home.php?
$query = " SELECT * FROM back2_leden ";

//lees het id uit url
//$id = $_GET['id'];

$resultaat = mysqli_query($mysqli, $query);

// zijn er resultaten?
if(mysqli_num_rows($resultaat) == 0)
{
	echo "er zijn geen resultaten";
} 
else
{
    echo "<td>Voeg een nieuw lid toe: <a href = 'lid_nieuw.php?id=" .['id'] . "'>Voeg toe</a></td>";
        echo "</br>";
        echo "</br>";
    echo "<table border='3'>";

    echo "<tr>";
        echo "<th>Voornaam</th>";
        echo "<th>Achternaam</th>";
        echo "<th>Geboortedatum</th>";
        echo "<th>Geslacht</th>";
        echo "<th>Lid sinds</th>";
        echo "<th>Bewerk pagina</th>";
        echo "<th>Verwijder pagina</th>";
        echo "<th>Foto pagina</th>";
    echo "</tr>";

    while ($rij = mysqli_fetch_array($resultaat))
    {
        echo "<tr>";
            echo "<td>" . $rij ['first_name']       . "</td>";
            echo "<td>" . $rij ['last_name']        . "</td>";
            echo "<td>" . $rij ['birth_date']       . "</td>";
            echo "<td>" . $rij ['gender']           . "</td>";
            echo "<td>" . $rij ['member_since']     . "</td>";
            echo "<td><a href = 'lid_bewerk.php?id=" . $rij['id'] . "'>Bewerk</a></td>";
            echo "<td><a href = 'lid_verwijder.php?id=" . $rij['id'] . "'>Verwijder</a></td>";
            echo "<td><a href = 'foto.php?id=" . $rij['id'] . "'>Foto</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

 <p>Je bent ingelogd als <?php echo $_SESSION['username']; ?><br>
 <a href="logout.php">Klik hier</a> om uit te loggen.</p>

</body>
</html>


<?php
?>


