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
  <title>Consultation</title>
</head>
<header>
  <h1>Consultation</h1>
</header>
<nav>
  <ul>
       <li><a href="index.php">Accueil</a></li>
       <li><a href="id_administration.php">Administration</a></li>
       <li><a href="id_gestion.php">Gestion</a></li>
       <li><a href="#" class="first">Consultation</a></li>
  </ul>
</nav>
<body>
    <?php

        /* Accès à la base */
        include ("mysql.php");

        
        $requete = "SELECT * FROM `mesures` ORDER BY DESC $id_mesure";
        $resultat = mysqli_query($id_bd, $requete)
          or die("Execution de la requete impossible : $requete");
        mysqli_close($id_bd);

        /* Affichage du tableau  */
        echo '<div class="tablo">';
        echo '<table>';
        while($ligne=mysqli_fetch_assoc($resultat))
         {  
          extract($ligne);
          echo '<tr>';
          echo  "<td> $id_mesure </td>";
          echo  "<td> $date </td>";
          echo  "<td> $heure </td>";
          echo  "<td> $valeur </td>";
          echo  "<td> $capteur </td>";
          echo '</tr>';
         }
        echo '</table>';
        echo '</div>';
    ?>  
</body>
</html>
