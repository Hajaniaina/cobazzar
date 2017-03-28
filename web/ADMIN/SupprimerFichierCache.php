<?php
$listeCat=$con3->getCategorie();
$i=1;
foreach ($listeCat as $listC) {
	$file="../CACHE/ProduitCache".$i."php";
	if(file_exists($file)){
		 unlink($file);
	}
	$i++;
}
if(file_exists("../CACHE/cacheCategorie.php")){
		 unlink("../CACHE/cacheCategorie.php");
}

?> 
