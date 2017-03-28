<?php
	$featureElectronique=$con->getFeatureProduit($ListeCat[0][0]);
	$featureMagsinMode=$con->getFeatureProduit($ListeCat[1][0]);
	$featureEnfantJouet=$con->getFeatureProduit($ListeCat[2][0]);
	$featureMaisonFourniture=$con->getFeatureProduit($ListeCat[3][0]);
	$featureSportExterieur=$con->getFeatureProduit($ListeCat[4][0]);
?>

<h3 class="w3ls-title">Produits</h3>
<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
							<?php foreach($featureElectronique as $felect) { ?>

									<div class="item">
										<div class="glry-w3agile-grids agileits" style="height: 300px; width: 200px"> 
											<a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><img src="images/<?php echo $felect[8] ?>" alt="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" title="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" height="200"; width="250" ></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><?php echo $felect[7] ?></a></h4>
												<p><?php echo $felect[13] ?></p>
												<h5><?php echo $felect[9] ?></h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
													<input type="hidden" name="amount" value="100.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</button>
												</form>  
											</div>   
										</div>   
									</div>
							<?php } ?>

								</div> 
							</div>
						</div>


						<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo1").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo1" class="owl-carousel">
							 <?php foreach($featureMagsinMode as $felect) { ?> 
									<div class="item">
										<div class="glry-w3agile-grids agileits" style="height: 300px; width: 200px"> 
											<a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><img src="images/<?php echo $felect[8] ?>" alt="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" title="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" height="200"; width="250" ></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><?php echo $felect[7] ?></a></h4>
												<p><?php echo $felect[13] ?></p>
												<h5><?php echo $felect[9] ?></h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
													<input type="hidden" name="amount" value="100.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</button>
												</form>  
											</div>   
										</div>   
									</div>
							<?php } ?>
								</div>   
							</div>
						</div> 


						<div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo2").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo2" class="owl-carousel"> 

								 <?php foreach($featureEnfantJouet as $felect) { ?> 

									<div class="item">
										<div class="glry-w3agile-grids agileits" style="height: 300px; width: 200px"> 
											<a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><img src="images/<?php echo $felect[8] ?>" alt="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" title="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" height="200"; width="250" ></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><?php echo $felect[7] ?></a></h4>
												<p><?php echo $felect[13] ?></p>
												<h5><?php echo $felect[9] ?></h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
													<input type="hidden" name="amount" value="100.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</button>
												</form>  
											</div>   
										</div>   
									</div>
								<?php } ?>

								</div>    
							</div>
						</div>


						<div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo3").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo3" class="owl-carousel"> 

								 <?php foreach($featureMaisonFourniture as $felect) { ?> 

									<div class="item">
										<div class="glry-w3agile-grids agileits" style="height: 300px; width: 200px"> 
											<a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><img src="images/<?php echo $felect[8] ?>" alt="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" title="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" height="200"; width="250" ></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><?php echo $felect[7] ?></a></h4>
												<p><?php echo $felect[13] ?></p>
												<h5><?php echo $felect[9] ?></h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
													<input type="hidden" name="amount" value="100.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</button>
												</form>  
											</div>   
										</div>   
									</div>
								<?php } ?>

								</div>    
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo2").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo2" class="owl-carousel"> 

								 <?php foreach($featureSportExterieur as $felect) { ?> 

									<div class="item">
										<div class="glry-w3agile-grids agileits" style="height: 300px; width: 200px"> 
											<a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><img src="images/<?php echo $felect[8] ?>" alt="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" title="<?php echo $felect[1] ." ". $felect[4] ." ".$felect[13] ?>" height="200"; width="250" ></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="Redirection/RedirectionSingle.php?idproduit=<?php echo $felect[5] ?>"><?php echo $felect[7] ?></a></h4>
												<p><?php echo $felect[13] ?></p>
												<h5><?php echo $felect[9] ?></h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
													<input type="hidden" name="amount" value="100.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</button>
												</form>  
											</div>   
										</div>   
									</div>
								<?php } ?>

								</div>    
							</div>
						</div>
					</div> 
