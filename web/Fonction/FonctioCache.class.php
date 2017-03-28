<?php
	class FonctioCache
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
		function getAllCategorieProduit($idCategorie)
		{
			$bdd = $this->bdd_connect();
				$reponse = $bdd->query("SELECT * from CATEGORIE join SOUSCATEGORIE on CATEGORIE.IDCATEGORIE=SOUSCATEGORIE.IDCATEGORIE join PRODUITS on SOUSCATEGORIE.IDSOUSCATEGORIE=PRODUITS.IDSOUSCATEGORIE where CATEGORIE.IDCATEGORIE='$idCategorie'");
			$reponse->execute();
			$categorie=$reponse->fetchAll();
			return $categorie;
		}

		function cache($fileName,$idCat)
		{
			
			$listProduit=$this->getAllCategorieProduit($idCat);
			$fichierCache = "CACHE/".$fileName.$idCat."php";
			// si la page n'existe pas dans le cache ou si elle a expiré (30 minutes)
			// on lance la génération de la page et on la stoke dans un fichier
			if (@filemtime($fichierCache)<time()-(1800)) {
			    // on démarre la bufferisation : rien n'est envoyé au navigateur
			    ob_start();?>
   				<?php foreach($listProduit as $listP) {?>
					<div class="col-md-3 product-grids"> 
						<div class="agile-products" style="height: 300px; width: 200px">
							<div class="new-tag"><h6><br></h6></div>
							<a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $listP[5]  ?>"><img src="images/<?php echo  $listP[8] ?>" class="img-responsive" alt="<?php echo $listP[1] ." ". $listP[4]."-".$listP[7]."-".$listP[9] ?>" title="<?php echo $listP[1] ." ". $listP[4]."-".$listP[7]."-".$listP[9] ?>"></a>
							<div class="agile-product-text">              
								<h5><a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $listP[5]  ?>"><?php echo  $listP[7] ?></a></h5> 
								
								<h6><del><?php echo  $listP[9]+500 ?></del> <?php echo  $listP[9] ?></h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Ajouter au panier</button>
								</form> 
							</div>
						</div> 
					</div>
			<?php } ?>		
			<?php 
    // on recuperre le contenu du buffer
    $contenuCache = ob_get_contents();
    ob_end_flush(); // on termine la bufferisation
    $fd = fopen("CACHE/".$fileName.$idCat."php", "w"); // on ouvre le fichier cache
    if ($fd) {
        fwrite($fd,$contenuCache); // on écrit le contenu du buffer dans le fichier cache
        fclose($fd);
    }

		// sinon le fichier cache existe déjà, on ne génère pas la page
		// et on envoie le fichier statique à la place
		} else {
		    readfile("CACHE/".$fileName.$idCat."php"); // affichage du contenu du fichier
		    echo "\n".'<!-- Servi par le cache -->'; // et un petit message
		}
		}
	}
?>