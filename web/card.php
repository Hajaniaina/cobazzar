<?php include("GZIP/gzip.php") ?>
<?php include("CACHE/variableCache.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Credit Card :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/<?php echo APPLICATION_REV; ?>-jquery-2.2.3.min.js"></script> 
<?php 
	include("META/meta.php");
?>

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
<!-- card-page -->
	<div class="card-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1"> Smart bazaar Credit card</h3>  
			<div class="agile-card-top">
				<div class="col-md-4 card-top-grids">
					<h4>Save <span>$15</span></h4>
					<i class="fa fa-camera" aria-hidden="true"></i>
					<h5>on purchase of Electronics In Smart bazaar.com</h5>
				</div>
				<div class="col-md-4 card-top-grids">
					<h4>Save <span>$5</span></h4>
					<i class="fa fa-motorcycle" aria-hidden="true"></i>
					<h5>on purchase of Smart bazaar Automotive </h5>
				</div>
				<div class="col-md-4 card-top-grids">
					<h4>Save <span>$20</span></h4>
					<i class="fa fa-users" aria-hidden="true"></i>
					<h5>on purchase of Clothings Using Card</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agile-card-text">
				<h5>New User Account Offers</h5>
				<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas faucibus ipsum et libero euismod iaculis. Integer consectetur congue laoreet. Morbi eget leo elementum, vulputate eros et, egestas diam. Nam egestas, quam id viverra congue, elit mi eleifend libero, eget vulputate ante lorem vel quam. Sed suscipit ligula eu mi bibendum, vel mollis enim finibus. Suspendisse vitae est tortor. Donec aliquet leo vitae ligula mattis, vitae auctor mi pellentesque. Integer eu dui accumsan, convallis neque id, malesuada urna. </p>
				<h5>Special account openings</h5>
				<p>Nulla sodales nulla et ipsum pharetra pharetra. Suspendisse potenti. Phasellus cursus vehicula lorem, nec dignissim orci cursus tempor. Suspendisse vel ullamcorper arcu. Mauris tellus augue, tristique ut varius ac, scelerisque ac urna. Mauris nibh ligula, cursus eu vehicula a, scelerisque a nunc. Mauris sit amet sem orci. Proin sit amet tortor non massa tincidunt faucibus. Sed a lacus a purus congue dignissim. Maecenas auctor urna et ullamcorper sagittis. Aenean semper, nisi sed vulputate euismod, justo odio dictum lorem, a mattis ipsum magna non quam.<br>  Maecenas faucibus ipsum et libero euismod iaculis. Integer consectetur congue laoreet. Morbi eget leo elementum, vulputate eros et, egestas diam. Nam egestas, quam id viverra congue, elit mi eleifend libero, eget vulputate ante lorem vel quam. Sed suscipit ligula eu mi bibendum, vel mollis enim finibus. Suspendisse vitae est tortor. Donec aliquet leo vitae ligula mattis, vitae auctor mi pellentesque. Integer eu dui accumsan, convallis neque id, malesuada urna. </p>
			</div>
		</div>
	</div>
	<!-- //card-page --> 
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