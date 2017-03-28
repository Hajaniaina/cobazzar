<?php
   require('../Fonction/Optimisation.class.php');
   require('../Fonction/Fonction.class.php');
    $idcategorie=$_GET['idCategorie'];
    $con=new Fonction();
    $listProduit=$con->getAllCategorieProduit( $idcategorie);
	header("Location:../".$listProduit[0][1] ."-Listes&types-produits-".$listProduit[0][0] ."-".$listProduit[0][0] .".bazzar");
?>