<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    if (POST['Body'] == 'YES') {
    	echo "<Response>
    	<Message>Hello, Mobile Monkey YES</Message>
		</Response>";
    
    } else {
    	echo "<Response>
    	<Message>Hello, Mobile Monkey NO</Message>
		</Response>";
    }
?>
