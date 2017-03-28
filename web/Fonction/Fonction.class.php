<?php
 	class Fonction
 	{
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

		function getCategorie()
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query('SELECT * from CATEGORIE');
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}
		function sousCategorie()
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query('SELECT * from SOUSCATEGORIE');
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}
		function getCategorieEtSousCategorie()
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query('SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE');
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}
		function getAllCategorieProduit($idCategorie)
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE join PRODUITS on SOUSCATEGORIE.IDSOUSCATEGORIE=PRODUITS.IDSOUSCATEGORIE where CATEGORIE.IDCATEGORIE='$idCategorie'");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}

		function getFeatureProduit($idCategorie)
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE join PRODUITS on SOUSCATEGORIE.IDSOUSCATEGORIE=PRODUITS.IDSOUSCATEGORIE join DESCRIPTIONPRODUIT on PRODUITS.IDPRODUIT=DESCRIPTIONPRODUIT.IDPRODUIT where CATEGORIE.IDCATEGORIE='$idCategorie' limit 8");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}

		function ficheUneSeuleProduit($idProduit)
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from PRODUITS join DESCRIPTIONPRODUIT on PRODUITS.IDPRODUIT=DESCRIPTIONPRODUIT.IDPRODUIT where PRODUITS.IDPRODUIT='$idProduit'");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}

		function getRecommendationProduct()
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE join PRODUITS on SOUSCATEGORIE.IDSOUSCATEGORIE=PRODUITS.IDSOUSCATEGORIE join DESCRIPTIONPRODUIT on PRODUITS.IDPRODUIT=DESCRIPTIONPRODUIT.IDPRODUIT ORDER BY rand(PRODUITS.IDPRODUIT)  limit 8");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}

		function recheche($motCle)
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE join PRODUITS on SOUSCATEGORIE.IDSOUSCATEGORIE=PRODUITS.IDSOUSCATEGORIE  where NOMCATEGORIE like '%$motCle%' or PRIX like '%$motCle%' or NOMPRODUIT  like '%$motCle%' or NOMSOUSCATEGORIE  like '%$motCle%'");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}

		function listSousCategorieDunCategorie($idCategorie)
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE where CATEGORIE.IDCATEGORIE='$idCategorie'");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}

		function insertFacture($IDUSER ,$QUANTITE, $DATY)
		{
			$bdd=$this->bdd_connect();
			$query=$bdd->query("insert into FACTURE (IDPRODUIT,IDFACTURE,DATY) values ( $IDUSER ,$QUANTITE, $DATY)");
			$query->execute();
		}
		
		function insertProduitFacture($IDPRODUIT ,$IDFACTURE)
		{
			$bdd=$this->bdd_connect();
			$query=$bdd->query("insert into PRODUITFACTURE (IDPRODUIT,IDFACTURE) values ( $IDPRODUIT,$IDFACTURE)");
			$query->execute();
		}

		function inscrire($NOM,$MAIL,$MOTDEPASSE)
		{
			$bdd = $this->bdd_connect();
			$query = $bdd->query("insert into MEMBRE (NOM,MAIL,MOTDEPASSE) values('$NOM','$MAIL','$MOTDEPASSE')");
			$query->execute();
		}
		function getIdMembre($MAIL,$MOTDEPASSE)
		{
			$bdd = $this->bdd_connect();
			$query = $bdd->query("SELECT * from  MEMBRE where MAIL='$MAIL' and MOTDEPASSE='$MOTDEPASSE'");
			$query->execute();
			$idM=$query->fetchAll();
			return $idM;
		}
		function connecter($MAIL,$MOTDEPASSE)
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from  MEMBRE where MAIL='$MAIL' and MOTDEPASSE='$MOTDEPASSE'");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			if(sizeof($categorie)!=0)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		function produitDescription()
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from PRODUITS join DESCRIPTIONPRODUIT on PRODUITS.IDPRODUIT=DESCRIPTIONPRODUIT.IDPRODUIT");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}
		//Ajouter categorie//
		function insertCategorie($nomCat)
		{
			    $bdd = $this->bdd_connect();
				$query = $bdd->query("insert into CATEGORIE (NOMCATEGORIE) values('$nomCat')");
				$query->execute();
		}
		function deleteCategorie($idCat)
		{
			    $bdd = $this->bdd_connect();
				$query = $bdd->query("delete from  CATEGORIE where IDCATEGORIE=$idCat");
				$query->execute();
		}

		function updateCategorie($idCat,$nomCAt)
		{
			    $bdd = $this->bdd_connect();
				$query = $bdd->query("update CATEGORIE set NOMCATEGORIE='$nomCAt' where  IDCATEGORIE=$idCat");
				$query->execute();
		}
		//Ajouter sous categorie//
		function getIdCate($nomCat)
		{
			$bdd = $this->bdd_connect();
			$query = $bdd->query("SELECT IDCATEGORIE from  CATEGORIE where NOMCATEGORIE='$nomCat'");
			$query->execute();
			$idM=$query->fetchAll();
			return $idM;
		}
		function ajouterSousCat($nomCategorie,$nomSousCat)
		{
			$bdd = $this->bdd_connect();
			$idCategorie=$this->getIdCate($nomCategorie);
			$val=$idCategorie[0][0];
			$query = $bdd->query("insert into SOUSCATEGORIE (IDCATEGORIE,NOMSOUSCATEGORIE) values($val,'$nomSousCat')");
			$query->execute();
		}
		function supprimerSousCat($idSoucat)
		{
			$bdd = $this->bdd_connect();
			$query = $bdd->query("delete from  SOUSCATEGORIE where IDSOUSCATEGORIE=$idSoucat");
			$query->execute();
		}
		function modifierSousCat($nomsouCat,$idSoucat)
		{
			$bdd = $this->bdd_connect();
			$query = $bdd->query("update SOUSCATEGORIE set NOMSOUSCATEGORIE='$nomsouCat' where  IDSOUSCATEGORIE=$idSoucat");
			$query->execute();
		}

		function ajouterProduit($nomSousCat,$nomProd,$image,$prix,$titre,$desc)
		{
			$bdd = $this->bdd_connect();
			$query1 = $bdd->query("select IDSOUSCATEGORIE from SOUSCATEGORIE where NOMSOUSCATEGORIE='$nomSousCat'");
			$query1->execute();
			$idM=$query1->fetchAll();
			$idSouCat=$idM[0][0];
			$query2 = $bdd->query("insert into PRODUITS (IDSOUSCATEGORIE, NOMPRODUIT,IMAGE,PRIX) values($idSouCat,'$nomProd','$image',$prix)");
			$query2->execute();

			$query3 = $bdd->query("select IDPRODUIT from PRODUITS ORDER BY IDPRODUIT DESC limit 1");
			$query3->execute();
			$idPro=$query3->fetchAll();
			$idP=$idPro[0][0];

			$query4 = $bdd->query("insert into DESCRIPTIONPRODUIT (IDPRODUIT, DESCRIPTION,SOUSDESCRIPTION) values($idP,'$desc','$titre')");
			$query4->execute();
		}
		
		function supprimerProduit($idProduit)
		{
			$bdd = $this->bdd_connect();
			$query = $bdd->query("delete from  PRODUITS where IDPRODUIT=$idProduit");
			$query->execute();
		}

		function adminVerif($MAIL,$MOTDEPASSE)
		{
			$bdd = $this->bdd_connect();
			$reponse = $bdd->query("SELECT * from  ADMINIFO where MAIL='$MAIL' and MOTDEPASSE='$MOTDEPASSE'");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}

		function cacheCategorie()
		{
	      if( file_exists ("CategorieChache.php")==true){
			require ('CategorieChache.php');
		}
		else{

	    $Milieu="";
	    $listCategorie=$this->getCategorie();

		foreach($listCategorie as $listCat){ 
  							$sousCategorie=$this->listSousCategorieDunCategorie( $listCat[0]);
							$Milieu=$Milieu ?><li class="has-children">
									<a href="#"><?php $listCat[1]?> </a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li class="has-children">
											<a href="#">SOUS CATEGORIES</a>
											<ul class="is-hidden">
											   <?php  foreach($sousCategorie as $listSousCat){?>  
												
												<li><a href="Redirection/RedirectionProduit.php?idCategorie="<?php $listCat[0] ?>""><?php  $listSousCat[4] ?></a></li>
											<?php } ?>
											</ul>
										</li> 
										
								
									</ul><!-- .cd-secondary-dropdown --> 

								
								</li> 

							<?php } 
			$fin=$Milieu;
		    $file = fopen('CategorieChache.php', 'w+');
		    fputs($file, $fin); 
		    echo $fin;
		}

	}
}?>