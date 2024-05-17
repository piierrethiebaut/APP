<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
	$signupUser = filter_input(INPUT_POST, "signupUsername", FILTER_SANITIZE_SPECIAL_CHARS);
	$signupEmail = filter_input(INPUT_POST, "signupEmail", FILTER_SANITIZE_EMAIL);
	$signupPassword = filter_input(INPUT_POST, "signupPassword", FILTER_SANITIZE_SPECIAL_CHARS);

	$hash = password_hash($signupPassword, PASSWORD_DEFAULT);

	try {
		$sql = "INSERT INTO users(email,username,hash) VALUES ('$signupEmail', '$signupUser', '$hash')";
		mysqli_query($conn, $sql);

	} catch(mysqli_sql_exception) {
		echo "Inscription échouée<br>";
	}
}

?>
