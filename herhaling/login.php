<?php
session_start();

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
  'secret' => '6LeAYuQZAAAAAE5HEmCB236-RK9iwaLLEAR-AFX4',
  'response' => $_POST["g-recaptcha-response"]
);
$options = array(
  'http' => array (
    'method' => 'POST',
    'content' => http_build_query($data)
  )
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);

 

if ($captcha_success->success==false) {
  echo "<h2>Voltooi eerst de captcha!</h2>";
  echo "<td>Ga terug naar de <a href = 'index.php?'> inlog</a></td>";
}
else if ($captcha_success->success==true) 
{



if (isset($_POST['submit']))
{
	require 'config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	//versleutel ww:
	$password2 = sha1($password);

	$query = "SELECT * FROM back2_users
			  WHERE username = '$username'
			  AND	password= '$password2'";
	
	//BLS:
	echo $query . "<br/>";
	//
	
	$result = mysqli_query($mysqli, $query);

		if (mysqli_num_rows($result) == 1)
	{
		session_start();

		$_SESSION['username'] = $username;

		header("location:home.php");
	}
else
	{
		echo "U bent niet goed ingelogd";
		echo "<br/>";
		echo "<a href='index.php?'>Probeer het nog eens</a>";
	}

}
else
{
	echo "Niet alle velden zijn ingevuld!";
	exit;
}

}
?>
