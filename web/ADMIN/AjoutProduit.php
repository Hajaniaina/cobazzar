<?php
        include("verifuser.php");
    ?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<?php
     require('../Fonction/Fonction.class.php');
     $con=new Fonction();
     $listSousCat=$con->sousCategorie();
    
?>
<title>Ajout des produits</title>
<h1>Ajout des produits</h1>
<div>
  <form action="ajoutCatFonction.php" method="POST"  enctype="multipart/form-data">
  <label for="country">Nom Sous Categorie</label>
    <select id="country" name="soucat">
        <?php foreach( $listSousCat as $lisSC){?>
            <option value="<?php echo $lisSC[2];?>"><?php echo $lisSC[2];?></option>
         <?php } ?>
    </select>
    <label for="fname">Nom Produit</label>
    <input type="text" id="fname" name="nomProd" placeholder="Nm Produit..">

    <label for="lname">Image</label><br>
    <input type="file"  name="fileToUpload" id="fileToUpload"><br>
    <label for="lname">Prix</label><br>
    <input type="number" id="numb" name="prix" placeholder="Prix.."><br>
    <label for="lname">Titre</label><br>
    <input type="text" id="titr" name="titre" placeholder="Titre.."><br>
    <label for="lname">Description</label><br>
    <textarea id="descript" name="desc" placeholder="Description.."></textarea> 

     <input type="submit" value="Ok" name="submit">
  </form>
</div>

</body>
</html>