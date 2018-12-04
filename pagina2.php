<?php

session_start();

include "functies.php";

kop("Pagina Twee");

if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']==true) {
	$usernaam = $_SESSION['user'];
	
	print "Hallo $usernaam, welkom op pagina 2!<br><hr>";
	print "<br>Kies:";
	print "Uitloggen: <a href=\"uitloggen.php\">klik hier</a>";

	voet();
	
} else {
	
	header('Location: inloggen.php');
	
}