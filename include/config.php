<?php

//app settings
$GLOBALS['app_url'] = 'http://midvalleymmj.com/mmjapi/sms_marketing/index.php';

//Twilio API - https://www.twilio.com
$GLOBALS['twilio_sid'] = 'ACc4b34d25d05923b276e3ac753fd96a26';
$GLOBALS['twilio_token'] = '12a51b7a00e00839552fe78e9b747ff4';
$GLOBALS['twilio_number'] = '15416362496';

//database access
$GLOBALS['db_host'] = 'projectcrm.cv2t1ye7ufed.us-west-2.rds.amazonaws.com';
$GLOBALS['db_name'] = 'projectcrm';
$GLOBALS['db_user'] = 'admindb_main';
$GLOBALS['db_password'] = 'woqp2910!!!';

//Max number of SMS a user can send to his phone
$GLOBALS['max_sms_per_phone'] = 10;

//Message to send - Can use {code} corresponding to the activation code {code}
$GLOBALS['sms_message'] = 'You have joined Club MVC Rewards. Please use your phone number for store check-in.';

$GLOBALS['countries_codes_allowed'] = array('USA / Canada (+1)'=>'+1');

//Admin access
$GLOBALS['admin_username'] = 'admin';
$GLOBALS['admin_password'] = 'woqp2910!!!';

//demo mode
$GLOBALS['demo_mode'] = 0; //possible values: 0 or 1

/*
System variables
Not to be modified at least of you know what you are doing
*/
//database tables names
$GLOBALS['db_table']['sms'] = 'sms_numbers';
$GLOBALS['db_table']['sms_history'] = 'sms_history';

?>