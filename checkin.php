<?php
include_once('include/webzone.php');

$code = $_GET['code'];
//$phone = $_GET['phone'];

if($code=='') $jsOnReady = "$('#code').focus();";
else $numbers = get_sms_numbers(array('code'=>$code));

include_once('include/presentation/header_res_index.php');
?>

<div class="container"><center>

<?php
	


if(count($numbers)>0) {
		
	if($numbers[0]['verified']!=1) {
		$m1 = new MySqlTable();
		$sql = 'UPDATE '.$GLOBALS['db_table']['sms'].' SET verified=1 WHERE code="'.$m1->escape($code).'"';
		$m1->executeQuery($sql);
	}
	
	include_once('locked_content_check_in.php');
	
}
else {



?>
<img src="./images/club_mvc-1.png" alt="Check IN" width="150px" height="150px">
				<h3>Customer Rewards Check-In</h3>
	<p class="alt" style="margin-bottom:20px;">Enter Phone Number</p>
	<form method="GET">
	<input type="text" id="code" name="code" placeholder="Phone Number" style="padding:10px; width:300px;" value="<?php echo $code; ?>"><br><br>
	<input type="submit" class="btn btn-primary btn-large" value="Check-In Now">
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