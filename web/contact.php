<?php include("GZIP/gzip.php") ?>
<?php include("CACHE/variableCache.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Nous contacter  | Co bazzar</title>
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
	<!-- contact-page -->
	<div class="contact">
		<div class="container"> 
			<h1 class="w3ls-title w3ls-title1">Nous contacter</h1>  
			
			<div class="contact-form-row">
				<div class="col-md-7 contact-left">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Nom" required="">
						<input class="email" type="text" name="Email" placeholder="Mail" required="">
						<textarea placeholder="Message" name="Message" required=""></textarea>
						<input type="button" value="VALIDER">
					</form>
				</div> 
				<div class="col-md-4 contact-right">
					<div class="cnt-w3agile-row">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Gerer vos commandes <br/>
								Suivre facilement les commandes et les retours </p> 
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="cnt-w3agile-row cnt-w3agile-row-mdl">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-bell" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Notifications<br>
								Obtenir des alertes et des<br> recommandations pertinentes</p> 
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="cnt-w3agile-row">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Exigences<br>
                           Avec des listes de souhaits,<br> des critiques, des évaluations</p> 
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //contact-page --> 
	
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
    <script>
 
	$(document).ready(function(){
		
		editor=CKEDITOR.replace( 'ata',
		{                                       
		 forcePasteAsPlainText : true,
		 width   : '100%',
		 uiColor : '#f5f3de'                       
		 });
		$("#repondre").click(function()
		{
			
			
			$.ajax({
			   url : '<?php echo site_url()?>index.php/Accueil_controller/insertReponse',
			   type : 'POST',
			   data :  'question_id='+document.getElementById('Qid').value+'&answer_detail='+editor.getData()+'&user_id='+document.getElementById('userId').value,
			   dataType:'html',
				success : function(code_html, statut)
				{
					
					$('#listeR').append(code_html);
					 
				},
			   error : function(resultat, statut, erreur)
			   { 
				  
				 
			   },
			   complete : function(resultat, statut)
			  {							
			  }
			});
		    });
		});
</script>

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