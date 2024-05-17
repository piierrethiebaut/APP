<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])){

	$loginEmail = filter_input(INPUT_POST, "loginEmail", FILTER_SANITIZE_EMAIL);
	$loginPassword = filter_input(INPUT_POST, "loginPassword", FILTER_SANITIZE_SPECIAL_CHARS);

	try {
		$sql = "SELECT email,hash FROM users WHERE email = '$loginEmail'";
		$sqlTable = mysqli_query($conn, $sql);

		if(mysqli_num_rows($sqlTable) > 0) {
			$row = mysqli_fetch_assoc($sqlTable);
			$hash = $row["hash"];
			if(password_verify($loginPassword,$hash)){
				$_SESSION["email"] = $loginEmail;
				header("Location: home_page/accueil.php");
			} else {
				$badPassword = True;
			}
		}
	} catch(mysqli_sql_exception) {
		echo "Identification échouée<br>";
	}
}

?>
