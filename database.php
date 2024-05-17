<?php

//------------- Paramètres de connexion ---------------//

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_table = "app_db";

//-----------------------------------------------------//

try {

	$conn = mysqli_connect($db_server,$db_user,$db_password,$db_table);

} catch(mysqli_sql_exception) {
	echo "Connexion échouée<br>";
}
?>
