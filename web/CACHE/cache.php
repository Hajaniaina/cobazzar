<?php
require("Fonction/FonctioCache.class.php");
$con2=new FonctioCache();

$listCategorie=$con2->getCategorie();
$fichierCache = 'CACHE/cacheCategorie.php';
// si la page n'existe pas dans le cache ou si elle a expiré (30 minutes)
// on lance la génération de la page et on la stoke dans un fichier
if (@filemtime($fichierCache)<time()-(1800)) {
    // on démarre la bufferisation : rien n'est envoyé au navigateur
    ob_start();?>
    <?php foreach($listCategorie as $listCat){ ?>

				<li class="has-children">
					<a href="#"><?php echo $listCat[1] ?></a> 
				<?php 
					$sousCategorie=$con->listSousCategorieDunCategorie($listCat[0]);
				 ?>
					<ul class="cd-secondary-dropdown is-hidden">
						<li class="go-back"><a href="#">Menu</a></li>
						
						<li class="has-children">
							<a href="#">SOUS CATEGORIES</a> 
							<ul class="is-hidden">
							<?php foreach($sousCategorie as $listSousCat){ ?> 
								
								<li><a href="Redirection/RedirectionProduit.php?idCategorie=<?php echo $listCat[0] ?>"><?php echo $listSousCat[4]?></a></li> 
							<?php }  ?>
							</ul>
						</li> 
						
				
					</ul><!-- .cd-secondary-dropdown --> 

				
				</li>  

			<?php } ?>
			<?php 
    // on recuperre le contenu du buffer
    $contenuCache = ob_get_contents();
    ob_end_flush(); // on termine la bufferisation
    $fd = fopen("$fichierCache", "w"); // on ouvre le fichier cache
    if ($fd) {
        fwrite($fd,$contenuCache); // on écrit le contenu du buffer dans le fichier cache
        fclose($fd);
    }

// sinon le fichier cache existe déjà, on ne génère pas la page
// et on envoie le fichier statique à la place
} else {
    readfile('CACHE/cacheCategorie.php'); // affichage du contenu du fichier
    echo "\n".'<!-- Servi par le cache -->'; // et un petit message
}
?>