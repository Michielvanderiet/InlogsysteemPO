<?php

session_start();

if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']==true) {
	
	session_unset();  
	session_destroy();  

}

header('Location: inloggen.php'); 
	
?>