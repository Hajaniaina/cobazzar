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
             if(isset($_GET["categorie"])){
             $nomCat=$_GET["categorie"];
             $con3->insertCategorie($nomCat);
             include("SupprimerFichierCache.php");
             header("Location:Categorie-Listes-As.bazzar");
         }
         if(isset($_GET["souscategorie"])){
             $nomCat=$_GET["nomCategorie"];
             $nomSousCat=$_GET["souscategorie"];
             $con3->ajouterSousCat($nomCat,$nomSousCat);
             include("SupprimerFichierCache.php");
             header("Location:Sous-Categorie-Listes-As.bazzar");
         }
         if(isset($_POST["nomProd"]))
         {
                  $target_dir = "../images/";
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                  // Check if image file is a actual image or fake image
                  if(isset($_POST["submit"])) {
                      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    /*txt $check==false  (upload fichier txt)*/
                      if($check != false) {
                      
                          echo "File is an image - " . $check["mime"] . ".";
                          $uploadOk = 1;
                      } else {
                          echo "File is not an image.";
                          $uploadOk = 0;
                      }
                  }
                  // Check if file already exists
                  if (file_exists($target_file)) {
                      echo "Sorry, file already exists.";
                      $uploadOk = 0;
                  }
                  // Check file size
                  if ($_FILES["fileToUpload"]["size"] >500000000) {
                      echo "Sorry, your file is too large.";
                      $uploadOk = 0;
                  }
                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType != "jpeg"
                  && $imageFileType != "gif" /* $imageFileType !="txt" */) {
                      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                      $uploadOk =0;
                  }
                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                      echo "Sorry, your file was not uploaded.";
                  // if everything is ok, try to upload file
                  } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                      } else {
                          echo "Sorry, there was an error uploading your file.";
                      }
                  }
            $nomSouC=$_POST["soucat"];
            $nomProd=$_POST["nomProd"];
            $image=basename( $_FILES["fileToUpload"]["name"]);
           
            $prix=$_POST["prix"];
            $titre=$_POST["titre"];
            $desc=$_POST["desc"];
            $con3->ajouterProduit($nomSouC,$nomProd,$image, $prix,$titre,$desc);
            include("SupprimerFichierCache.php");
            header("Location:Listes-Produits-As.bazzar");
        
         }
        ?>
    </body>
</html>
