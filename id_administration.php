<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="AH" />
  <meta name="description" content="Saé23" />
  <meta name="keywords" content="HTML, CSS" />
  
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <title>Identification administrateur</title>
</head>
<header>
	<nav>
  <ul>
       <li><a href="index.php">Accueil</a></li>
       <li><a href="id_administration.php">Administration</a></li>
       <li><a href="id_gestion.php">Gestion</a></li>
       <li><a href="consultation.php">Consultation</a></li>
  </ul>
</nav>
</header>
<body>
	<section>
		<p>
			</br>
			<em><strong>Connection de l'administrateur à la base de données des bâtiments et des capteurs:</strong></em>
			</br>
		</p>
		<form action="login_administration.php" metho="post" enctype="multipart/form-data"> 
			<fieldset>
				<legend>Saisissez vos identifiants</legend>
				<label for="id_a">Login:</label>
				<input type="identifiant" name="id_a" id="id_a"/>
				<label for="mdp">Mot de passe:</label>
				<input type="password" name="mdp" id="mdp"/>
			</fieldset>
			<p>
				<input type="submit" name="Valider"/>
			</p>
		</form>
	</section>
</body>
</html>