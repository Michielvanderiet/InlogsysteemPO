<?php
// maak verbinding met je database
$conn = mysql_connect('localhost', 'gebruikersnaam', 'wachtwoord');
// selecteer je database
$db   = mysql_select_db('users');
// je query
$sql = "SELECT * FROM users";
// query uitvoeren
$result = mysql_query($sql);
// loopje om de resultaten uit te poepen
while( $row = mysql_fetch_assoc($result)
{
   // resultaten laten zien..
   echo $row['kolomnaam'];
}
?>