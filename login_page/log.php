<?php
include("login_page/php/login.php");
include("login_page/php/signup.php");
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login_page/styles/stylelog.css" />
    <title>Sign in / Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
		<form action="index.php" method="post" class="sign-in-form"> <!-- Connexion  -->
            <h2 class="title">Connexion</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
	      <input type="email" placeholder="Adresse e-mail" name="loginEmail"/> <!-- Adresse e-mail -->
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
	      <input type="password" placeholder="Mot de passe" name="loginPassword"/> <!-- Mot de passe -->
            </div>
	    <input type="submit" value="Se connecter" class="btn solid" name="login"/> <!-- Se connecter -->
		<?php include("login_page/php/passwordError.php");?>
            <p class="social-text">Connectez vous avec d'autre plateformes</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
	  <form action="index.php" method="post" class="sign-up-form"><!-- Inscription -->
            <h2 class="title">S'inscrire</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
	      <input type="text" placeholder="nom d'utilisateur" name="signupUsername"/><!-- Nom d'utilisateur -->
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
	      <input type="email" placeholder="Email" name="signupEmail"/><!-- Email -->
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
	      <input type="password" placeholder="Mot de passe" name="signupPassword"/><!-- Mot de passe -->
            </div>
	    <input type="submit" class="btn" value="Créer un compte" name="signup"/><!-- S'inscrire -->
            <p class="social-text">Connectez vous avec d'autre plateformes</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Vous êtes nouveau ?</h3>
            <p>
              Rejoignez une expérience unique en vous créant un compte ci-dessous
              
            </p>
            <button class="btn transparent" id="sign-up-btn">
              inscrivez vous
            </button>
          </div>
          <img src="login_page/images/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Vous avez dejà un compte ?</h3>
            <p>
              
              
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Se connecter
            </button>
          </div>
          <img src="login_page/images/reg.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login_page/scripts/app.js"></script>
  </body>
</html>
