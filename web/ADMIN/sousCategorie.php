<?php
    include("verifuser.php");
  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Les Sous Categories existants</title>
    </head>
    <body>
        <!--==============================header=================================-->
           <?php include ("header.php");
            $listC=$con->getCategorie();
            ?>

        <!--==============================Content=================================-->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h1>Sous Categories</h1>
                     <div>Ajout</div>
                     <div style="width:300px;margin-top:1%">
                         <form action="ajoutCatFonction.php">

                             <input type="text" class="form-control" name="souscategorie" placeholder="nom sous categorie"style="float:left;width:70%">
                             <label>Nom Categorie</label>
                            <select name="nomCategorie">
                              <?php foreach($listC as $l) {?>
                               <option><?php echo $l[1]?></option>
                               <?php }?>
                            </select>
                             <input type="submit" class="btn btn btn-sm-default" value="Ajouter" style='margin-left:2%'>
                         </form>
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
                                            <th>ID categorie</th>
                                            <th>Nom</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                         $listCategorie=$con->sousCategorie();
                                        //boucle
                                         foreach ( $listCategorie as $listCt) {
                                          
                                         ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $listCt[1] ?></td> 
                                                 <td><?php echo $listCt[2] ?></td> 
                                                <td> <input type="hidden"  name="idC" value="<?php echo  $listCt[0]?>">
                                                    <button type="button" class="btn btn btn-default" style="background-color: #ababab;color:white;width:120px;" data-toggle="modal" data-target="#modif<?php echo  $listCt[0] ?>">Modifier</button>
                                                    <div id="modif<?php echo  $listCt[0] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <form action="modifcat.php" class="form-group" method="get">
                                                              <!-- Modal content-->
                                                            <div class="modal-content" style="background-color:#F1F1F4">
                                                              <div class="modal-header" style="background-color:#23527c">
                                                                  <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                                                                <h4 class="modal-title" style='color:white'>Modification categorie</h4>
                                                              </div>
                                                              <div class="modal-body" >
                                                                    <input type="hidden" name="idSC" value="<?php echo  $listCt[0] ?>">
                                                                    <label style="padding-top: 4%;">Nom de la categorie</label>
                                                                    <input class="form-control" type="text" value="<?php echo  $listCt[2] ?>" name="nomSCat">
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
                                                <button type="button" class="btn btn btn-default" style="background-color:#8a071f;color:white;width:120px;" data-toggle="modal" data-target="#myModal<?php echo  $listCt[0] ?>">Supprimer</button>
                                                    <div id="myModal<?php echo  $listCt[0] ?>" class="modal fade" role="dialog">
                                                      <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content" style="background-color:#F1F1F4">
                                                        <div class="modal-header" style="background-color:#23527c">
                                                            <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                                                          <h4 class="modal-title" style='color:white'>Confirmation suppression</h4>
                                                        </div>
                                                          <div class="modal-body">
                                                            <p>Les produits ayant cette categorie doivent etre supprimes.</p>
                                                            <p>Voulez-vous confirmer la suppression?</p>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <a  href="suppcat.php?idSCat=<?php echo  $listCt[0] ?>" class="btn btn btn-success" style="color:white;">Oui</a>
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
