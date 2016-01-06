<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
    <HEAD>
        <TITLE>Twilio</TITLE>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    </HEAD>
    <BODY>
        <div class="container">
        <?php
// Install the library via PEAR or download the .zip file to your project folder.
// This line loads the library
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
                
                echo '<p class="bg-success">Message Sent!</p>';
                
            } catch (Services_Twilio_RestException $e) {
                echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
            }
        }
        
        ?>

        
            <br>

            <h2>Trojan Utilities SMS Gateway</h2>

            <br><br>

            <form method="post">
                <div class="form-group">
                    <label for="number" class="col-sm-1 control-label">Number</label>
                    <div class="col-sm-3">
                        <input type="number" id="number" class="form-control" name="number" placeholder="i.e. 07543225228"><br>
                    </div>
                </div>
                <div class="col-sm-12">

                </div>

                <div class="form-group">
                    <label for="text" class="col-sm-1 control-label">Text</label>
                    <div class="col-sm-6">
                        <input type="text" id="text" class="form-control" name="text"><br>
                    </div>
                </div>
                 <div class="col-sm-12">
                     
                <div class="form-group col-sm-7">
                    <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="Send">
                    </div>
                </div>

            </form>

            </div>
        </div>

    </BODY>
</HTML>