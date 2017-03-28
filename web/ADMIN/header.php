<?php
     require('../Fonction/Fonction.class.php');
     $con=new Fonction();
    
?>

<?php
        include("verifuser.php");
?>
<?php 
    include ("../googleAnalytics.php");
?>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Admin-A&1.bazzar"> admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Co Bazzar &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Deconnexion</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                     <li>
                        <a  href="Categorie-Listes-As.bazzar"><i class="fa fa-desktop fa-3x"></i> Categories</a>
                    </li>
                     <li>
                        <a  href="Sous-Categorie-Listes-As.bazzar"><i class="fa fa-bar-chart-o fa-3x"></i> Sous categorie</a>
                    </li>
                    <li>
                        <a  href="Listes-Produits-As.bazzar"><i class="fa fa-qrcode fa-3x"></i> Produit</a>
                    </li>	
		 </ul>
               
            </div>
            
        </nav> 