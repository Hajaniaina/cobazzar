
<?php
	$listeREcomendation=$con->getRecommendationProduct();
?>
<div class="recommend">
				<h3 class="w3ls-title">Notre Recommendations </h3> 
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
				<div id="owl-demo5" class="owl-carousel">
				<?php 
				 foreach ($listeREcomendation as $listeRec) {
				 
				?>
					<div class="item">
						<div class="glry-w3agile-grids agileits"  style="height: 250px; width: 200px">
							<div class="new-tag"><h6>20% <br> Off</h6></div>
							<a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $listeRec[5] ?>"><img src="images/<?php echo $listeRec[8] ?>" alt="<?php echo $listeRec[1] ." ". $listeRec[4] ." ".$listeRec[13] ?>" title="<?php echo $listeRec[1] ." ". $listeRec[4] ." ".$listeRec[13] ?>" height="200"; width="250" ></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $listeRec[5] ?>"><?php echo $listeRec[7] ?></a></h4>
								<p><?php echo $listeRec[13] ?></p>
								<h5><?php echo $listeRec[9] ?></h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Women Sandal" /> 
									<input type="hidden" name="amount" value="20.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</button>
								</form>
							</div>        
						</div> 
					</div>
				<?php } ?>	
					
				</div>    
			</div>