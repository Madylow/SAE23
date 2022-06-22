<?php 
	/*script of connection to data base SAe23 */
	$id_bd = mysql_connect('127.0.0.1', 'root', 'passroot', 'sae23')
	or die ("Connexion au serveur et/ou à la base de données impossible");

	mysql_query($id_bd, "SET NAMES 'utf8'");
 ?>
