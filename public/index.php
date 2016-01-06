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
        ?>

        <?php if (!empty($_POST)): ?>
        
        <?php
            $client = new Services_Twilio($sid, $token);
            try {
                $message = $client->account->messages->create(array(
                    'From' => '+441704450193', // From a valid Twilio number
                    'To' => '+44' . $_POST['number'], // Text this number
                    'Body' => $_POST['text']
                ));
                
                print $message->sid;

                echo 'Message Sent!';
                
            } catch (Services_Twilio_RestException $e) {
                echo $e->getMessage();
            }
        ?>

        <?php else: ?>
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                Number: <input type="number" name="number"><br>
                Text: <input type="text" name="text"><br>
                <input type="submit" name="send">
            </form>
        <?php endif; ?>

    </BODY>
</HTML>