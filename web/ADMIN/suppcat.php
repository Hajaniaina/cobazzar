<?php
     require('../Fonction/Fonction.class.php');
     $con3=new Fonction();
?>
<?php
        include("verifuser.php");
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1></h1>
        <?php 
            
            if(isset($_GET["idCat"])){
            $idCAt=$_GET["idCat"];
            $con3->deleteCategorie($idCAt);
            include("SupprimerFichierCache.php");
            header("Location:Categorie-Listes-As.bazzar");
        }
        if(isset($_GET["idSCat"]))
        {
            $idSCAt=$_GET["idSCat"];
            $con3->supprimerSousCat($idSCAt);
            include("SupprimerFichierCache.php");
            header("Location:Sous-Categorie-Listes-As.bazzar");
        }
        if(isset($_GET["idP"]))
        {
            $idProduit=$_GET["idP"];
            $con3->supprimerProduit($idProduit);
            include("SupprimerFichierCache.php");
            header("Location:Listes-Produits-As.bazzar");
        }

        ?>
    </body>
</html>
