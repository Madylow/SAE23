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
  <title>Identification gestionnaire</title>
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
      <em><strong>Connection aux gestionnaires à la base de données des bâtiments:</strong></em>
      </br>
    </p>
    <form action="login_gestion.php" metho="post" enctype="multipart/form-data"> 
      <fieldset>
        <legend>Saisissez vos identifiants</legend>
        <label for="id_g">Login:</label>
        <input type="identifiant" name="id_g" id="id_g"/>
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