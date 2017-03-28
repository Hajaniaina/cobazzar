<?php
  if(isset($_POST["Search"])){
	$motCle=$_POST["Search"];
	$motCle= strtolower($motCle);
    header("Location:../Les-Resutats-de-recherche-".$motCle."-SiteDeVenteEnligne.bazzar");
}
?>