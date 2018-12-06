<?php

session_start(); 

include "functies.php";

kop("menu"); 

$usernaam = $_POST['usernaam'];
$wachtwoord = $_POST['wachtwoord'];

include "db_gegevens.php";

// Stap 1 en 2:  connectie maken met mysql server en de juiste database
// .. de gegevens (bijvoorbeeld $db_server) zijn gedefinieerd in de file db_inc.php.
// .. op die manier hoef je die gegevens maar in 1 bestand te noteren.

$mysql = mysqli_connect($db_server, $db_users) or die ("Contact met database niet mogelijk.") ;

// Stap 3: query opbouwen
$query = "SELECT * FROM bbc WHERE region = 'Europe'";

print "$query<br>";

// Stap 4: query uitvoeren
$resultaat = mysqli_query($mysql,$query) ;



// Stap 3 en 4 in ��n.
//$resultaat = mysqli_query($mysql,"SELECT * FROM bbd WHERE region = 'Europe'");



// Stap 5: resultaat verwerken
echo "<table border=\"1\">";
/* Onderstaande regel moet wel sporen met de query! (uitdaging: automatiseer dat!)*/
echo "<tr><td>Name</td><td>Region</td><td>Area</td><td>Population</td><td>GDP</td></tr>";


// mysql_fetch_row haalt rij voor rij uit $resultaat
while ($rij = mysqli_fetch_assoc($resultaat)) {



echo "<tr>";

	// haalt veld voor veld uit $rij
	foreach ($rij as $veld) {
		echo "<td>$veld</td>";
	}
	echo "</tr>";
}

echo "</table>";

// Stap 6: verbinding verbreken
mysqli_close($mysql);


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