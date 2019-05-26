<?php
include_once('../include/webzone.php');

$verified = $_GET['verified'];
$page_number = $_GET['page'];

if($page_number=='') $page_number=1;
$nb_display=50;
$start = $page_number*$nb_display-$nb_display;

//$verified=3;

include_once('../include/presentation/header_admin.php');

?>

<div class="container">	
	<div class="row">
		
		<div class="span10">
			
		<p> MAIN DASHBOARD - Coming Soon</p>

<?php
include_once('../include/presentation/footer.php');
?>