<?php
    require('../Fonction/Fonction.class.php');
    $con=new Fonction();
	$nom=$_POST["name"];
	$mail=$_POST["email"];
	$pass=$_POST["password"];

    $con->inscrire($nom,$mail,$pass);
    $idMembre= $con->getIdMembre($mail,$pass);
    $_SESSION["membre"]=$idMembre[0][0];
	header("Location:../Top-des-Categories-aaa125aaa-cobazzar-Vente-en-ligne-"."produits&index.bazzar");
?>