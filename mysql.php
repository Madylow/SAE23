<?php 
	/*script of connection to data base SAe23 */
	$id_bd = mysql_connect('localhost', 'jballarin', 'rtblagnac', 'SAe23')
	or die ("Connexion au serveur et/ou à la base de données impossible");

	mysql_query($id_bd, "SET NAMES 'utf8'");
 ?>