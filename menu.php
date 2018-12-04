<?php

session_start(); 

include "functies.php";

kop("menu"); 

$usernaam = $_POST['usernaam'];
$wachtwoord = $_POST['wachtwoord'];

if (($usernaam == "dsf")&&($wachtwoord == "geheim")) {
	$ingelogd = true;
} else {
	$ingelogd = false;
}


if ($ingelogd==false) {
	echo "usernaam en wachtwoord kloppen niet. Probeer het opnieuw.<br>";
	echo "<a href=\"inloggen.php\">Inloggen</a>";
	
}  else  {

	$_SESSION['ingelogd']=true;
	$_SESSION['user']="$usernaam";


	print "<h1>$usernaam, Welkom op deze <em>besloten</em> server</h1>";
	print "<br>";
	print "Kies: <br>";
	print "<ul><li><a href=\"pagina2.php\">Vervolgpagina</a></li>";
	print "<li><a href=\"uitloggen.php\">Uitloggen</a></li>";
	print "</ul>";

	voet();
}