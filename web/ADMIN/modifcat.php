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
            require('../Fonction/Fonction.class.php');
            $con3=new Fonction();
            if(isset($_GET["idC"])){
            $idC=$_GET["idC"];
            $nomCat=$_GET["nomCat"];
            $con3->updateCategorie( $idC,$nomCat);
            include("SupprimerFichierCache.php");
            header("Location:Categorie-Listes-As.bazzar");
        }
        if(isset($_GET["idSC"]))
        {
           $nomSC=$_GET["nomSCat"];
           $idSC=$_GET["idSC"];
           $con3->modifierSousCat($nomSC,$idSC);
           include("SupprimerFichierCache.php");
           header("Location:Sous-Categorie-Listes-As.bazzar");
        }
      
        ?>
    </body>
</html>
