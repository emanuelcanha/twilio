<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

  	<?php if (POST['Body'] == 'YES') {
    	$msg = 'yes'
    
    } else {
    	$msg = 'no'
    }
    
?>

<Response>
    <Message><?php echo $msg . ' thanks for your reply' ?></Message>
</Response>
