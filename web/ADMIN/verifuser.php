<?php
     session_start ();
     if(isset($_SESSION["admin"])){
		echo $_SESSION["admin"];
		
	}
	else
	{
		header("Location:Admin-log-12-A&1.bazzar");
	}
	
?>