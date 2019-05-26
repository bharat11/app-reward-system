<?php
include_once('include/webzone.php');

$jsOnReady = '$("#phone_number").focus();';

include_once('include/presentation/header_index.php');

?>

<div class="container">
	
	<center>
<img src="./images/club_mvc-1.png" alt="Check IN" width="150px" height="150px">	
	<h3>PLEASE SELECT BELOW</h3>
<form action="./checkin.php">
<input type="submit" id="submit" class="btn btn-primary btn-large" value="REWARDS CHECK-IN">
</form>
		
<form action="./join.php">
<input type="submit" id="submit" class="btn btn-primary btn-large" value="NEW MEMBER SIGN-UP">
</form>

<!--	
<form action="./coupon.php">
<input type="submit" id="submit" class="btn btn-primary btn-large" value="REDEEM COUPON">
</form>
<form action="./reserved.php">
<input type="submit" id="submit" class="btn btn-primary btn-large" value="CLUB MVC LOUNGE">
</form>
-->
                  
	<div id="error_display"></div>
	
	</center>

</div>

<?php
include_once('include/presentation/footer.php');
?>