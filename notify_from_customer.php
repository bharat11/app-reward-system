<?php
include_once('include/webzone.php');

$code = $_GET['code'];

if($code=='') $jsOnReady = "$('#code').focus();";
else $numbers = get_sms_numbers(array('code'=>$code));


//$t = $code;


if($code=='') {
  //Hide content
  include_once('include/presentation/header_res_index.php');
} else {
  //Show content
   include_once('include/presentation/header_res.php');
}


//include_once('include/presentation/header_res_index.php');
?>

<div class="container"><center>

<?php
if(count($numbers)>0) {
		
	if($numbers[0]['verified']!=1) {
		$m1 = new MySqlTable();
		$sql = 'UPDATE '.$GLOBALS['db_table']['sms'].' SET verified=1 WHERE code="'.$m1->escape($code).'"';
		$m1->executeQuery($sql);
	}
	
	include_once('locked_content.php');
	
}
else {
	?>
	<h3>CLUB MVC VIP LOUNGE</h3>
	<p class="alt" style="margin-bottom:20px;">Please Enter VIP Number</p>
	<form method="GET">
	<input type="text" id="code" name="code" placeholder="Your VIP Code" style="padding:10px; width:300px;" value="<?php echo $code; ?>"><br><br>
	<input type="submit" class="btn btn-primary btn-large" value="Submit VIP Code">
	</form>
	<?php
	if($code!='' && count($numbers)==0) {
		$message = 'Your verification code is incorrect';
		echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">x</button>'.$message.'</div>';
	}
}

?>

</center>
</div>

<?php
include_once('include/presentation/footer.php');
?>