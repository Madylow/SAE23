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
  <title>Gestion</title>
</head>
<header>
  <h1>Gestion</h1>
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
    <?php

        /* Accès à la base */
        include ("mysql.php");

        /* Sélection des pieces en fonction de l'interet */
        $requete = "SELECT * FROM `capteurs`";
        $resultat = mysqli_query($id_bd, $requete)
          or die("Execution de la requete impossible : $requete");
        mysqli_close($id_bd);

        /* Affichage de la liste des pièces  */
        echo '<div class="tablo">';
        echo '<table>';
        while($ligne=mysqli_fetch_assoc($resultat))
         {  
          extract($ligne);
          echo '<tr>';
          echo  "<td> $id_capt </td>";
          echo  "<td> $nom </td>";
          echo  "<td> $type_capt </td>";
          echo '</tr>';
         }
        echo '</table>';
        echo '</div>';
    ?>
</body>
</html>
