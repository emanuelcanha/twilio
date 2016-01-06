<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
    <HEAD>
        <TITLE>Twilio</TITLE>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    </HEAD>
    <BODY>
        <?php
        require('Services/Twilio.php');

        $sid = "AC1bd01d0304ada92d34175d05fb42afe8"; // Your Account SID from www.twilio.com/user/account
        $token = "27f226f3a4457865b8493d8b82812865"; // Your Auth Token from www.twilio.com/user/account

        if (!empty($_POST)) {
            $client = new Services_Twilio($sid, $token);
            try {
                $message = $client->account->messages->create(array(
                    'From' => '+441704450193', // From a valid Twilio number
                    'To' => '+44' . $_POST['number'], // Text this number
                    'Body' => $_POST['text']
                ));
                
                echo 'Message Sent!';
                
            } catch (Services_Twilio_RestException $e) {
                echo $e->getMessage();
            }
        }
        ?>

        <DIV>

            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                Number: <input type="number" name="number"><br>
                Text: <input type="text" name="text"><br>
                <input type="button" class="btn btn-primary" value="Send">
            </form>

        </DIV>

    </BODY>
</HTML>