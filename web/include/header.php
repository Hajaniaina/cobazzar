

<?php
     require('Fonction/Fonction.class.php');
     $con=new Fonction();
     $listCategorie=$con->getCategorie();
?>


<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#">SITE DE VENTE EN LIGNE</a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Mon Compte<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="Redirection/RedirectionLogin.php">Se connecter </a></li> 
							<li><a href="Redirection/RedirectionSingIn.php">S'inscrire</a></li> 
						</ul> 
					</li> 
					
					
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Aide</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="Redirection/RedirectionIndex.php"><span>Co </span> <i>Bazzar</i></a></h1>
					
				</div>	
				<div class="header-search">
					<form action="Redirection/RedirectionSeachResult.php" method="post">
						<input type="search" name="Search" placeholder="Recherche produit..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="my-account">
						<a href="Nous-contacter-ABaaa125aaa&cobazzar-Vente-en-ligne-AB.bazzar"><i class="fa fa-map-marker" aria-hidden="true"></i> NOUS CONTACTER</a>						
					</div>
					<div class="cart"> 
						<form action="#" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>  
					</div>
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Categorie</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="Offre-du-jours-par-cobazzar-aA&1.bazzar">Offre du jours</a></li>
								
								<?php
									//Cache
									include("CACHE/cache.php") ;
								?>
							
								<li><a href="#"> </a></li>  
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	
					 <!--<a  href="Redirection/RedirectionSiteMap.php" style="color: white">Plan du site</a>-->
					 <a  href="Redirection/RedirectionSiteMap.php" style="color: white">Plan du site</a>
				</div>
				<div class="move-text">
					
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>