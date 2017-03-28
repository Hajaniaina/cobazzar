<?php include("GZIP/gzip.php") ?>
<?php include("CACHE/variableCache.php") ?>

<?php

	 require('Fonction/Optimisation.class.php');
	 $idProd=$_GET["idproduit"];
     $con=new Optimisation();
     $listCategorie=$con->titreSingleProduit($idProd);
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $listCategorie[0][13] ."  - ". $listCategorie[0][7] ."  -  ".$listCategorie[0][1] ."-"."vente en ligne" ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/<?php echo APPLICATION_REV; ?>-jquery-2.2.3.min.js"></script>

<?php 
	include("META/meta.php");
?>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->

<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->

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
<!-- //scroll to fixed--> 
<!-- start-smooth-scrolling -->

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
	<!-- fonction php -->
	<?php 
		$idP=$_GET["idproduit"];
		$ficheProduit=$con->ficheUneSeuleProduit($idP);
	?>
	<!-- fin fonction php  -->

	<!-- products -->
	<div class="products">	 
		<div class="container">  
			<div class="single-page">
		<?php 
			foreach ($ficheProduit as $ficheP) {
			
		?>
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/<?php echo $ficheP[3]  ?>">
									<div class="thumb-image detail_images"> <img src="images/<?php echo $ficheP[3] ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="images/<?php echo $ficheP[3]  ?>">
									 <div class="thumb-image"> <img src="images/<?php echo $ficheP[3] ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="images/<?php echo $ficheP[3]  ?>">
								   <div class="thumb-image"> <img src="images/<?php echo $ficheP[3]  ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h1 class="item_name"><?php echo $ficheP [8]?></h1><hr/>
						<h2 style="font-size: 17px">Description: c'est la meilleur qualite de <strong><?php echo $ficheP [8]?></strong> </h2>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 vus</li>
								
							</ul> 
						</div>
						<div class="single-price">
							<ul>
								<li><?php echo $ficheP[4]  ?></li>  
								<li><del><?php echo $ficheP[4] + 500 ?></del></li> 
								<li><span class="w3off">10% REDUCTION</span></li> 
								
							</ul>	
						</div> 
						<p class="single-price-text"><?php echo $ficheP[7]  ?> </p>
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls_item" value="Snow Blower" /> 
							<input type="hidden" name="amount" value="540.00" /> 
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</button>
						</form>
					</div>
				   <div class="clearfix"> </div>  
				</div>

			<?php } ?>	

			</div> 
			<!-- recommendations -->
			 <hr/>
			<!-- recommendations -->
			  <?php include("slider/sliderProduct.php"); ?>
			<!-- //recommendations -->
			<hr/>
			<!-- //recommendations --> 
			<!-- collapse-tabs -->
			
			
		</div>
	</div>

	<!--//products-->  
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
    <link href="css/<?php echo APPLICATION_REV; ?>-bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/<?php echo APPLICATION_REV; ?>-style.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="css/<?php echo APPLICATION_REV; ?>-animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
	<link href="css/<?php echo APPLICATION_REV; ?>-menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->   
	<link href="css/<?php echo APPLICATION_REV; ?>-owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  

	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="css/<?php echo APPLICATION_REV; ?>-fontawesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- js -->
	
	<script src="js/owl.carousel.js"></script>
	<script src="js/<?php echo APPLICATION_REV; ?>-bootstrap.js"></script>
	<!--flex slider-->
	<script defer src="js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script src="js/imagezoom.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<!-- scroll to fixed--> 
<script src="js/<?php echo APPLICATION_REV; ?>-jqueryscrolltofixedmin.js" type="text/javascript"></script>

<script type="text/javascript" src="js/<?php echo APPLICATION_REV; ?>-movetop.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
	</body>
</html>