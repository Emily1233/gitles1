<?php
require_once 'session.inc.php';
require "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw lid</title>
</head>
<body>
  <h2>Lid toevoegen:</h2>
    <form action="lid_nieuw_verwerk.php" method="post">
    <p>Geboortedatum:   <input type="date" name="birth_date" placeholder="dd/mm/yyyy" required /></p>
    <p>Lid sinds:       <input type="date" name="lid_sinds" placeholder="dd/mm/yyyy" required /></p>
    <p>Voornaam:        <input type="text" name="first_name" placeholder="Naam" required /></p>
    <p>Achternaam:      <input type="text" name="last_name" placeholder="Achternaam" required /></p>
    <p>Geslacht:  </br> <input type="radio" name="gender" value="F" checked/>F</p>
                        <input type="radio" name="gender" value="M" />M</p>
         				<input type="submit" name="submit" value="voeg toe">

<?php
    echo "</br>";
    echo "</br>";
    echo "<td>Ga terug naar het <a href = 'home.php?id    =" . "'> overzicht</a></td>";
?>

