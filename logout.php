<?php 

session_start();

session_unset();

session_destroy();
echo "SUCCESSFULLY LOGGED OUT";
header("Location: login.php");
?>