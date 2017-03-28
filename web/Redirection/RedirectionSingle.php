<?php
   require('../Fonction/Optimisation.class.php');
   require('../Fonction/Fonction.class.php');
    $idP=$_GET['idproduit'];
    $con=new Optimisation();
    $con2=new Fonction();
	$ficheProduit=$con2->ficheUneSeuleProduit($idP);
	$listCategorie=$con->titreSingleProduit($idP);
	header("Location:../".$listCategorie[0][13] ."-". $listCategorie[0][7] ."-".$listCategorie[0][1]."-".$ficheProduit[0][0] .".bazzar");
?>