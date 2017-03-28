<?php include("GZIP/gzip.php") ?>
<?php include("CACHE/variableCache.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Notre Plan du site co Bazaar an E-commerce </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="js/<?php echo APPLICATION_REV; ?>-jquery-2.2.3.min.js"></script> 
<?php 
	include("META/meta.php");
?>


<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
</head>
<body>
	<!-- header -->
	<!-- header -->
	<?php include("include/header.php") ?>
	<!---fin header--->
	<!-- //header --> 	

	<!---Fonction PHP---->
	<?php 	

		$listeCategorie=$con->getCategorie();
		$i=1;
		$j=1;
	 ?>
	<!---fin fonction HP--->

	<!-- site map -->
	<div class="sitemap">
		<div class="container"> 
			<h1 class="w3ls-title w3ls-title1">Notre Plan du site</h1>
			<div class="sitemap-row"> 
				<nav class="sitemap-tabs" data-spy="affix" data-offset-top="400"> 
					<div  id="myNavbar">
						<ul> 
						<?php foreach($listeCategorie as $listC){?>
							<li><a href="#w3sec<?php echo $i ?>"><i class="fa fa-mobile"></i><?php  echo $listC[1] ?></a></li>
						<?php
						 $i++;
						 } 
						 ?>	
						</ul> 
					</div>
				</nav>	
			<?php foreach($listeCategorie as $listC){
			 $ListeSousCategorie=$con->listSousCategorieDunCategorie($listC[0]);
				?>
				<div id="w3sec<?php echo $j ?>" class="container-fluid sitemap-text">
					<h3 class="w3sitemap-title"><i class="fa fa-mobile"></i> <?php echo $listC[1]?></h3>  
					<div class="col-md-3 sitemap-text-grids"> 
						<h5 class="sitemap-text-title"><a href="Redirection/RedirectionProduit.php">LISTE SOUS CATEGORIE</a></h5> 
						<ul>  
						   <?php foreach($ListeSousCategorie as $listSousCat) { ?>
							<li><a href="Redirection/RedirectionProduit.php?idCategorie=<?php echo $listSousCat[0]?>"><?php echo  $listSousCat[4] ?></a></li>
							<?php } ?>
							
						</ul>  
						
					</div>
					
					<div class="clearfix"> </div>
				</div>
			<?php $j++ ;} ?>
		</div>
			<script>
			$(document).ready(function(){
			  // Add scrollspy to <body>
			  $('body').scrollspy({target: ".sitemap-tabs", offset: 50});

			  // Add smooth scrolling on all links inside the navbar
			  $("#myNavbar a").on('click', function(event) {
				// Make sure this.hash has a value before overriding default behaviour
				if (this.hash !== "") {
				  // Prevent default anchor click behaviour
				  event.preventDefault();

				  // Store hash
				  var hash = this.hash;

				  // Using jQuery's animate() method to add smooth page scroll
				  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
				  $('html, body').animate({
					scrollTop: $(hash).offset().top
				  }, 800, function(){
			   
					// Add hash (#) to URL when done scrolling (default click behaviour)
					window.location.hash = hash;
				  });
				}  // End if
			  });
			});
			</script> 
			<div class="sitemap-row2  sitemap-text"> 
				<h3 class="w3sitemap-title"><i class="fa fa-gears"></i>Smart Bazaar Services</h3>  
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="marketplace.php">Marketplace</a></li> 
						<li><a href="values.php">Core Values</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>  
					</ul>
				</div>
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="about.php">About Us</a></li> 
						<li><a href="contact.php">Contact Us</a></li>  
						<li><a href="login.php">Login</a></li>  
					</ul>
				</div>
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="signup.php">Sign Up</a></li>  
						<li><a href="login.php">Order Status</a></li> 
						<li><a href="faq.php">FAQ</a></li>  
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //site map --> 
	<!-- footer-top -->
	<?php include("include/footer.php") ?>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
	<!-- menu js aim -->
	<script src="js/<?php echo APPLICATION_REV; ?>-jquerymenuaim.js"> </script>
	<script src="js/<?php echo APPLICATION_REV; ?>-main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/<?php echo APPLICATION_REV; ?>-bootstrap.js"></script>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
	<link href="css/<?php echo APPLICATION_REV; ?>-bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/<?php echo APPLICATION_REV; ?>-style.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="css/<?php echo APPLICATION_REV; ?>-animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
	<link href="css/<?php echo APPLICATION_REV; ?>-menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->   
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="css/<?php echo APPLICATION_REV; ?>-fontawesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- js -->
	 
	<!-- //js --> 
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
	<!-- web-fonts -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/<?php echo APPLICATION_REV; ?>-movetop.js"></script>
	<script type="text/javascript" src="js/<?php echo APPLICATION_REV; ?>-easing.js"></script>	
</body>
</html>