<?php
    
  	<?php if (POST['Body'] == 'YES') {
    	$msg = 'yes'
    
    } else {
    	$msg = 'no'
    }

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
    <Message><?php echo $msg ?>, thanks for the message!</Message>
</Response>
