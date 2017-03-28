<?php include("GZIP/gzip.php") ?>
<?php include("CACHE/variableCache.php") ?>

<?php
   
 $motC=$_GET["Search"];
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resultat de recherche-<?php echo $motC ?> : dans le site de vente en ligne CoBazzar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/<?php echo APPLICATION_REV; ?>-jquery-2.2.3.min.js"></script> 
<?php 
	include("META/meta.php");
?> 

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->

<!-- web-fonts --> 
<!-- scroll to fixed--> 
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
<!-- the jScrollPane script -->

<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin --> 
</head>
<body>
	<!-- header -->
	<!-- header -->
	<?php include("include/header.php") ?>
	<!---fin header--->
	<!-- //header --> 	
	<!-- products -->
	<?php
    
	    if(isset($_GET["Search"])){
	    $motCle=$_GET["Search"];
	    $listProduit=$con->recheche($motCle);   
   }
    ?>

	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right">
				<!-- breadcrumbs --> 
				<h2><ol class="breadcrumb breadcrumb1">
					<li><a href="index.php">Home</a></li>
					<li class="active">Recherche</li>
				</ol> </h2>
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h1 style="color: white;">Resultat de recherche => <?php echo $motCle ?></h1>
					
					<div class="clearfix"> </div>
				</div>
				<div class="products-row" style="height: 800px; overflow: auto;">
			<?php
				if(sizeof($listProduit)==0)
				{
					echo "<br/><h3>Aucun resultat associer a votre recherche!!</h3>";
				}
			?>
			<?php foreach($listProduit as $listP) {?>
					<div class="col-md-3 product-grids"> 
						<div class="agile-products" style="height: 300px; width: 200px">
							<div class="new-tag"><h6>20%<br>Off</h6></div>
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

					<div class="clearfix"> </div>
				</div>
				<!-- add-products --> 
				
				<!-- //add-products -->
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left" style="height: auto;">
						<h4>Filter par prix</h4>            
						<div class="row row1 scroll-pane">
						<FORM action="Redirection/RedirectionSeachResult.php" method="post">
							<INPUT type= "radio" name="Search" value="1000"> 1000<br><br>
							<INPUT type= "radio" name="Search" value="2000"> 2000<br><br>
							<INPUT type= "radio" name="Search" value="3000"> 3000<br><br>
							<INPUT type= "radio" name="Search" value="4000"> 4000<br><br>
							<INPUT type= "radio" name="Search" value="5000"> 5000<br><br>
							<input type="submit" value="Ok">
						</FORM>
							
						</div> 
					</div>
					<div class="sidebar-row">
						<h4> Categorie</h4>
						<FORM action="Redirection/RedirectionSeachResult.php" method="post">
						<?php foreach ($listCategorie as $listCA) {?>
							<?php 
								$remplc=str_replace("&", " ", $listCA[1]);
								$value=explode(" ",$remplc);
								
							?>
							<INPUT type= "radio" name="Search" value="<?php echo $value[0] ?>"> <?php echo $listCA[1] ?><br><br>
							<?php } ?>
							<input type="submit" value="Ok">
							</FORM>
					    </div>
							 
				</div>
				<div class="related-row" style="height: 300px">
					<h4>Rescherche associe</h4>
					<ul>
						<li><a href="Redirection/RedirectionProduit.php?idCategorie=1">Des materiels electronique</a></li>
						<li><a href="Redirection/RedirectionProduit.php?idCategorie=2">La mode des enfants et jouets</a></li>
						
					</ul>
				</div>
				
			</div>

			<div class="clearfix"> </div>
            <hr/>
			<!-- recommendations -->
			  <?php include("slider/sliderProduct.php"); ?>
			<!-- //recommendations -->
			<hr/>

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
    <script src="js/<?php echo APPLICATION_REV; ?>-bootstrap.js"></script>

    <link href="css/<?php echo APPLICATION_REV; ?>-bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/<?php echo APPLICATION_REV; ?>-style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/<?php echo APPLICATION_REV; ?>-menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<link href="css/<?php echo APPLICATION_REV; ?>-animate.min.css" rel="stylesheet" type="text/css" media="all" />   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/<?php echo APPLICATION_REV; ?>-fontawesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->

<script src="js/<?php echo APPLICATION_REV; ?>-owl.carousel.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/<?php echo APPLICATION_REV; ?>-movetop.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script src="js/<?php echo APPLICATION_REV; ?>-jqueryscrolltofixedmin.js" type="text/javascript"></script>

</body>
</html>