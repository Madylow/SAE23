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
  <title>Accueil</title>
</head>
<header>
  <h1>Accueil</h1>
</header>
<nav>
  <ul>
       <li><a href="#" class="first">Accueil</a></li>
       <li><a href="id_administration.php">Administration</a></li>
       <li><a href="id_gestion.php">Gestion</a></li>
       <li><a href="consultation.php">Consultation</a></li>
  </ul>
</nav>
<body>
  <h2>Objetctifs du site web dynamique:</h2>
  <section>
    <p>Ce site a pour objectif d'afficher bons nombres d'informations.</p>
    <p>En effet, en fonction de la page Web sélectionnée, diverses informations seront affichées.</p>
    <p>Sur cette page, il est possible de retrouver les bâtiments gérés et les mentions légales.</p>
    <p>Sur la page <a href="id_administration.php>">Administration</a> est accessible uniquement par l'administrateur qui pourra ajouter ou supprimer des bâtiments et des capteurs.</p>
    <p>Sur la page <a href="id_gestion.php">Gestion</a>, qui est accessible uniquement pour les gestionnaires, il est affiché les mesures des capteurs. Seulement les mesures des capteurs du bâtiment appartenant au gestionnaire identifié s'afficheront.</p>
    <p>La page <a href="consultation.php">Consultation</a> est accessible pour tout le monde. Elle affiche la dernière mesure de tous les capteurs.</p>
  </section>
  <h2>Bâtiments gérés par le site web dybamique:</h2>
  <section>
    <?php
        /* Accès à la base */
        include ("mysql.php");

        
        $requete = "SELECT * FROM `batiments`";
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
          echo  "<td> $id_bat </td>";
          echo  "<td> $nom </td>";
          echo '</tr>';
         }
        echo '</table>';
        echo '</div>';
    ?>
  </section>
  <hr />
  <h3>Mentions légales:</h3>
  <section>
    <p class="ML">Editeur du site</p>
    <p>HUMBLOT Alicia </br>MIANGUE Steve </br>MORAGLIA Lowan </br>BALLARIN Julian</br></p>
    <p class="ML">Mentions relatives à l'hébergement du site web</p>
    <p>GitHub</p>
  </section>
  
  <aside id="last">
    <hr />
    <p><em> Validation de la page PHP - CSS3 </em></p>
	<!-- Compléter les hyperliens avec vos références -->
	<a href="https://fr.piliapp.com/php-syntax-check/" target="_blank"> 
		<img class= "image-responsive" src="images/logo-pili.png" alt="PHP Valide !" />
	</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <!-- style1RWD.css ou style2RWD.css selon votre choix -->
	<a href="https://jigsaw.w3.org/css-validator/#validate_by_input" target="_blank">
		<img class= "image-responsive" src="images/validecss.PNG" alt="CSS Valide !" />
	</a>
  </aside>
  
  <footer>  <!-- pied de page -->
      <div class="colonne"> 
		 <a href="https://www.iut-blagnac.fr/fr" target="_blank"> 
		 <img class= "logo" src="images/logo-iut1.png" alt="logo de l'entreprise !" />
	     </a>
	  </div>
	  
	  <div class="colonne">
	     <p>Département <span>Réseaux</span> <span1>&</span1> <span>Télécoms</span></p>
	  </div>
  
   </footer>
</body>
</html>