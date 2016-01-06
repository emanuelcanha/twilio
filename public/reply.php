<?php
    $body = trim($_POST['Body']);
    
    if (strcasecmp($body, 'yes')) {
    $msg = 'yes';

    } else if (strcasecmp($body, 'no')){
        $msg = 'no';
    }

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
    <Message><?php echo $msg ?></Message>
</Response>
