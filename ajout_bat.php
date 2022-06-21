<?php
  session_start();
  include ("mysql.php");
  $nom_bat = $_POST['bat'];
  $nom_gest = $_POST['nom_g'];
  $motdep_gest = $_POST['mdp_g'];   
  $requete = "INSERT INTO `batiments` (`nom`, `login_gest`, `mdp_gest`)
  VALUES('$nom_bat','$nom_gest','$motdep_gest')";
  $resultat = mysqli_query($id_bd, $requete)
  or die("Execution de la requete impossible : $requete");
  mysqli_close($id_bd);
  echo '<div class="ajout">';
  echo "<br /><strong>Le batiment suivant a ete ajoute : </strong><br />";
  echo "<ul>
  <li> Nom bâtiment: $nom_bat</li>
  <li> Nom gestionnaire : $nom_gest</li>
  <li> Mot de passe gestionnaire : $modep_gest</li>
  </ul>
  </div>";
?>
