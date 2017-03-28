<?php
    require('../Fonction/Fonction.class.php');
    $con=new Fonction();
	
	$mail=$_POST["email"];
	$pass=$_POST["password"];

    $valeur=$con->connecter($mail,$pass);
    $idMembre= $con->getIdMembre($mail,$pass);
    if($idMembre!=0)
    {
    	 $_SESSION["membre"]=$idMembre[0][0];
		 header("Location:../Top-des-Categories-aaa125aaa-cobazzar-Vente-en-ligne-"."produits&index.bazzar");
    }
    else
    {
    	header("Location:../Creer-un-Compte-S-inscrire-gratuitement-aaa125aaa&122022-SiteDevente&enLigne-coBazzar.bazzar");
    }
   
?>