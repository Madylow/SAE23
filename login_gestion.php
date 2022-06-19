<?php 
	session_start();
	$_SESSION['mdp']=$_REQUEST['mdp'];
	$_SESSION['id_g']=$_REQUEST['id_g'];
	$motdep=$_SESSION['mdp'];
	$ident=$_SESSION['id_g'];
	$_SESSION["auth"]=FALSE;

	if (empty($motdep)) 
		echo "Impossible de se connecter à la base de données.";
	else
	{
		include ("mysql.php");
		$requete2= "SELECTE 'mdp_gest' FROM 'batiments'";
		$requete1= "SELECTE 'login_gest' FROM 'batiments'";
		$login= mysql_query($id_bd, $requete2)
			or die ("Execution de la requete impossible: $requete1");
		$motdepasse= mysql_query($id_bd, $requete1)
			or die ("Execution de la requete impossible: $requete2");
		$ligne1 = mysqli_fetch($requete1);
		$ligne2 = mysqli_fetch($requete2);
		if ($ident==$ligne1[0] && $motdep==$ligne2[0]) 
		{
			$_SESSION["auth"]=TRUE;
			mysql_close($id_bd);
			echo "<script type='text/javascript'>document.location.replace('gestion.php');</script>";
		}
		else 
		{
			$_SESSION= array();
			session_destroy();
			unset($_SESSION);
			mysql_close($id_bd);
			echo "<script type='text/javascript'>document.location.replace('id_gestion.php');</script>";
		}

	}
?>