<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inlog</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

	<h1>Log hieronder in</h1>
	<form action="login.php" method="POST"> 

		<p>
			<label for="username">Gebruiker:</label>
			<input type="text" name="username" id="username" placeholder="admin" required="required">
		</p>
		<p>
			<label for="password">Wachtwoord:</label>
			<input type="password" name="password" id="password" placeholder="#1Geheim" required="required">
		</p>

		<div class="g-recaptcha" data-sitekey="6LeAYuQZAAAAADAktaqoCNuXxRROwwuvBg2PKH57"></div>
      		<br/>

		<p>
			<td>&nbsp;</td>
			<input type="submit" name="submit" id="submit" value="Inloggen">
		</p>

	</form>

</body>
</html>

<?php

require 'config.php';
?>