<?php

//app settings
$GLOBALS['app_url'] = 'http://midvalleymmj.com/mmjapi/sms_marketing/index.php';

//Twilio API - https://www.twilio.com
$GLOBALS['twilio_sid'] = '';
$GLOBALS['twilio_token'] = '';
$GLOBALS['twilio_number'] = '';

//database access
$GLOBALS['db_host'] = '';
$GLOBALS['db_name'] = '';
$GLOBALS['db_user'] = '';
$GLOBALS['db_password'] = '';

//Max number of SMS a user can send to his phone
$GLOBALS['max_sms_per_phone'] = 10;

//Message to send - Can use {code} corresponding to the activation code {code}
$GLOBALS['sms_message'] = 'You have joined Club MVC Rewards. Please use your phone number for store check-in.';

$GLOBALS['countries_codes_allowed'] = array('USA / Canada (+1)'=>'+1');

//Admin access
$GLOBALS['admin_username'] = '';
$GLOBALS['admin_password'] = '';

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
