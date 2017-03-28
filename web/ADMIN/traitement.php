<?php
	 require('../Fonction/Fonction.class.php');
     $con=new Fonction();
     session_start();
     if(isset($_POST["email"]))
     {
     	 $mail=$_POST["email"];
	     $pass=$_POST["password"];
	     $listCategorie=$con->adminVerif($mail,$pass);
	  
	     if(sizeof($listCategorie)==1)
	     {
	     	$_SESSION["admin"]=$pass;
	     	header("Location:Admin-A&1.bazzar");
	     }
	     else
	     {
	     	
	     	header("Location:Admin-log-12-A&1.bazzar");
	     }
	    
  }
    