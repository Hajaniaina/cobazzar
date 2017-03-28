
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Les-Produits-existants </title>
    </head>
    <body>
        <!--==============================header=================================-->
           <?php include ("header.php"); ?>

        <!--==============================Content=================================-->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h1>Produits</h1>
                     <div><h2><a href="Ajout-Produits-As.bazzar">Ajouter</a></h2></div>
                     <div style="width:300px;margin-top:1%">
                        
                     </div> 
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Liste
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prix</th>
                                            <th>Titre</th>
                                            <th>Description</th>
                                           
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $listeProduit=$con->produitDescription();
                                            foreach ($listeProduit as $lisP) {
                                             
                                        ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo  $lisP[2] ?></td> 
                                                <td><?php echo  $lisP[4] ?></td> 
                                                <td><?php echo  $lisP[8] ?></td> 
                                                <td><?php echo  $lisP[7] ?></td> 
                                                 
                                                <td> <input type="hidden"  name="idP" value="<?php echo  $lisP[0] ?>">
                                                   
                                                    <div id="modif<?php echo  $lisP[0] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <form action="" class="form-group" method="get">
                                                              <!-- Modal content-->
                                                            <div class="modal-content" style="background-color:#F1F1F4">
                                                              <div class="modal-header" style="background-color:#23527c">
                                                                  <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                                                                <h4 class="modal-title" style='color:white'>Modification categorie</h4>
                                                              </div>
                                                              <div class="modal-body" >
                                                                    <input type="hidden" name="idC" value="<?php echo  $lisP[0] ?>">
                                                                    <div>
                                                                        <label style="padding-top: 4%;">Nom</label>
                                                                        <input class="form-control" type="text" value="<?php echo  $lisP[2] ?> %>" name="designation">
                                                                    </div>
                                                                    <div>
                                                                        <label style="padding-top: 4%;">Prix</label>
                                                                        <input class="form-control" type="text" value="<?php echo  $lisP[4] ?>" name="prix">
                                                                    </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                 <button  type="submit" class="btn btn btn-success" style="color:white;">Sauver</button>
                                                                <button type="button" class="btn btn btn-danger" data-dismiss="modal">Annuler</button>
                                                              </div>
                                                            </div>
                                                          </form>
                                                        </div>
                                                   </div>
                                                </td> 
                                                <td>
                                                <button type="button" class="btn btn btn-default" style="background-color:#8a071f;color:white;width:120px;" data-toggle="modal" data-target="#myModal<?php echo  $lisP[0] ?>">Supprimer</button>
                                                    <div id="myModal<?php echo  $lisP[0] ?>" class="modal fade" role="dialog">
                                                      <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content" style="background-color:#F1F1F4">
                                                        <div class="modal-header" style="background-color:#23527c">
                                                            <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                                                          <h4 class="modal-title" style='color:white'>Confirmation suppression</h4>
                                                        </div>
                                                          <div class="modal-body">
                                                            <p>Voulez-vous confirmer la suppression?</p>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <a  href="suppcat.php?idP=<?php echo  $lisP[0] ?>" class="btn btn btn-success" style="color:white;">Oui</a>
                                                            <button type="button" class="btn btn btn-danger" data-dismiss="modal">Non</button>
                                                          </div>
                                                        </div>

                                                      </div>
                                                  </div>
                                            </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    </div>
               
    </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>
