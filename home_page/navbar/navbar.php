<?php include("php/logout.php")?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-width", initial-scale="1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="navbar/navbar.css">
		<link rel="stylesheet" href="navbar/moncompte.css">
		<title>Accueil</title>
	</head>
    <body>
        <header>
            <div class="navbar">
            <div class="logo">
                <a href="#">Electronaute</a>
            </div>
            <ul class="links">
                <li><a href="accueil.php">Accueil</a></li>
                <!--<li><a href="projet.php">Projet</a></li>--->
                <li><a href="apropos.php">A propos</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="formulaire.php">Générer un devis</a></li>
            </ul>
            <div class="buttons">
                <a href="#" class="action-button pro">Espace pro</a>
                <li><a href="#" class="action-button" id="monCompteBtn">Mon compte</a></li>
            </div>
            <div id="myButton" class="burger-menu-button">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>   
        <div id="myDiv" class="burger-menu">
            <ul class="links">
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="#">Média</a></li>
                <li><a href="apropos.php">A propos</a></li>
                <li><a href="contact.php">contact</a></li>
                <!--<li><a href="config.php">Paramètres</a></li>--->
                <div class="divider"></div>
                <div class="buttons-burger-menu">
                    <a href="#"class="action-button pro">Espace pro</a>
                    <a href="#" class="action-button" id="monCompteBtn">Mon compte</a>
                </div>
            </ul>
        </div>
        </header>
        <main>
            <div id="monComptePanel">
                <div id="panelContent">
                    <h2>Mon Compte</h2>
                    <div class="info">
                        <label for="username">Nom d'utilisateur :</label>
			<span id="username"><?php include("php/myUsername.php")?></span>
                    </div>
                    <div class="info">
                        <label for="email">Adresse email :</label>
			<span id="email"><?php include("php/myEmail.php")?></span>
                    </div><!--
                    <div class="info">
                        <label for="fullname">Nom complet :</label>
                        <span id="fullname">Pierre THIEBAUT</span>
                    </div>
                    <div class="info">
                        <label for="birthdate">Date de naissance :</label>
                        <span id="birthdate">23/01/2003</span>
                    </div>-->
			<form action"php/logout.php" method="post">
				<input type="submit" class="deconn_button" name="logout" value="Se déconnecter">
			</form>
		</div>
		
            </div>
        </main>
	<script src="navbar/navbar.js"></script>
    </body>
</html>
