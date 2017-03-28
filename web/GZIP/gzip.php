<?php 

function initOutputFilter() {
   //ob_start('ob_gzhandler');
   register_shutdown_function('ob_end_flush');
}
initOutputFilter();

?>

<?php 
	include ("googleAnalytics.php");
?>