<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Twilio</TITLE>
   </HEAD>
   <BODY>

   	<?php
// Install the library via PEAR or download the .zip file to your project folder.
// This line loads the library
	require('Services/Twilio.php');

	$sid = "AC1bd01d0304ada92d34175d05fb42afe8"; // Your Account SID from www.twilio.com/user/account
	$token = "27f226f3a4457865b8493d8b82812865"; // Your Auth Token from www.twilio.com/user/account

	$client = new Services_Twilio($sid, $token);
	$message = $client->account->messages->sendMessage(
	  '+441704450193', // From a valid Twilio number
	  '+4407543228225', // Text this number
	  "Hello monkey!"
	);

	print $message->sid;

	echo 'Message Sent!';

	?>
   </BODY>
</HTML>