<?php 
class Optimisation{
	function bdd_connect() 
    {
		            $dsn = 'mysql:dbname=cobazzar;host=localhost';
					$user = 'root';
					$password = 'root';
		try {
			$bdd = new PDO($dsn, $user, $password);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Échec lors de la connexion : ' . $e->getMessage();
		}
		return $bdd;
	}

	
	function titreSingleProduit($idProduit)
	{
		    $bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE join PRODUITS on SOUSCATEGORIE.IDSOUSCATEGORIE=PRODUITS.IDSOUSCATEGORIE join DESCRIPTIONPRODUIT on DESCRIPTIONPRODUIT.IDPRODUIT=PRODUITS.IDPRODUIT where PRODUITS.IDPRODUIT='$idProduit' limit 8");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
	}

	function titreListeProduit($idCategorie)
	{
		    $bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE join PRODUITS on SOUSCATEGORIE.IDSOUSCATEGORIE=PRODUITS.IDSOUSCATEGORIE where CATEGORIE.IDCATEGORIE='$idCategorie'");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
	}
}
?>