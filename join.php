<?php
include_once('include/webzone.php');

$jsOnReady = '$("#phone_number").focus();';

include_once('include/presentation/header_join.php');

?>

<div class="container">
	
	<center>
<img src="./images/club_mvc-1.png" alt="Check IN" width="150px" height="150px">
	<h2>Rewards System</h2>
	<h4>To Join Enter</br>Your Phone Number</h4>
	<form>
		<select id="country_code" name="country_code" style="width:160px;">
		<?php
		if(count($GLOBALS['countries_codes_allowed'])>0) {
			foreach($GLOBALS['countries_codes_allowed'] as $ind=>$value) {
				echo '<option value="'.$value.'">'.$ind.'</option>';
			}			
		}
		?>
	</select>
	<br>
	<input type="text" id="phone_number" name="phone_number" placeholder="Your phone number" style="padding:10px; width:300px;"><br><br>
	<input type="submit" id="send_sms_btn" class="btn btn-primary btn-large" value="Join Club MVC Rewards">
	</form>
	
	<div id="error_display"></div>
	
	</center>

</div>

<?php
include_once('include/presentation/footer.php');
?>