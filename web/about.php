<?php include("GZIP/gzip.php") ?>
<?php include("CACHE/variableCache.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>A propos | Co Bazzar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/<?php echo APPLICATION_REV; ?>-jquery-2.2.3.min.js"></script> 
<?php 
	include("META/meta.php");
?>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<!-- fixed nav js -->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //js --> 
<!-- web-fonts -->


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
	<!--  about-page -->
	<div class="about">
		<div class="container"> 
			<h1 class="w3ls-title w3ls-title1">A propos de nous: Co bazzar<hr></h1>
			<div class="about-text">	
				
			<div class="about-text">	
				<p><strong>A propos de Co bazzar:</strong> Il s'agit d'un site web de vente en ligne. On y trouve de differente categorie et des differentes types des produits correspondants. Le principe c'est de vous offrir les meilleurs produits selon votre choix. L'acha est  en ligne et on peut livrer directement vos commandes chez vous.</p> <br><hr>
				<div class="col-md-3 ftr-top-left about-text-grids">
					<i class="fa fa-shopping-basket" aria-hidden="true"></i>
					<h2>10 millions +<br>Des produits</h2>
				</div>
				<div class="col-md-3 ftr-top-left about-text-grids">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h2>50,000 <br> Les vendeurs </h2>
				</div>
				<div class="col-md-3 ftr-top-left about-text-grids">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
					<h2>5 Millions <br>Livraisons</h2>
				</div>
				<div class="col-md-3 ftr-top-left about-text-grids">
					<i class="fa fa-globe" aria-hidden="true"></i>
					<h2>4000+ <br>Villes</h2>
				</div>
				<div class="clearfix"> </div>
			</div>
			<hr>
		</div>
	</div>
	<!-- //about-page --> 
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

    <link href="css/<?php echo APPLICATION_REV; ?>-bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/<?php echo APPLICATION_REV; ?>-style.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="css/<?php echo APPLICATION_REV; ?>-animate.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/<?php echo APPLICATION_REV; ?>-menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="css/<?php echo APPLICATION_REV; ?>-fontawesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- js -->
	
	<script src="js/<?php echo APPLICATION_REV; ?>-jqueryscrolltofixedmin.js" type="text/javascript"></script>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
	<!-- web-fonts -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/<?php echo APPLICATION_REV; ?>-movetop.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
</body>
</html>