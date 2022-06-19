<?php 
  session_start(); 
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="AH" />
  <meta name="description" content="Saé23" />
  <meta name="keywords" content="HTML, CSS" />
  
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <title>Administration</title>
</head>
<header>
  <h1>Administration</h1>
</header>
<nav>
  <ul>
       <li><a href="index.php">Accueil</a></li>
       <li><a href="id_administration.php">Administration</a></li>
       <li><a href="id_gestion.php">Gestion</a></li>
       <li><a href="consultation.php">Consultation</a></li>
  </ul>
</nav>
<body>
  <section> 
    <p>
    </br>
      <em><strong>Ajouter un batiment:</strong></em>
    <br>
    </p>
    <br />
    <form action="ajout_bat.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>Information sur le batiment</legend>
        <label for="bat"><strong>Nom du batiment à ajouter : <?php echo $type ?></strong></label>
        <input type="text" name="bat" id ="bat" />
        <br />
        <label for="nom_g">  Nom du gestionnaire du batiment: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="nom_g" id ="nom_g" />
        <br />
        <label for="mdp_g">  Mot de passe du compte gestionnaire : </label>
        <input type="text" name="mdp_g" id ="mdp_g" />
      </fieldset>
      <div class="valid">
        <input type="submit" value="Ajouter" />
      </div>
    </form>
  </section>

  <section> 
    <p>
    </br>
      <em><strong>Supprimer un batiment:</strong></em>
    <br>
    </p>
    <br />
    <form action="supp_bat.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>Information sur le batiment</legend>
        <label for="bat"><strong>Nom du batiment à ajouter : <?php echo $type ?></strong></label>
        <input type="text" name="bat" id ="bat" />
        <br />
        <label for="nom_g">  Nom du gestionnaire du batiment: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="nom_g" id ="nom_g" />
        <br />
        <label for="mdp_g">  Mot de passe du compte gestionnaire : </label>
        <input type="text" name="mdp_g" id ="mdp_g" />
      </fieldset>
      <div class="valid">
        <input type="submit" value="Supprimer" />
      </div>
    </form>
  </section>
</body>
</html>