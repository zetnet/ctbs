<?php

    $to = "marcel.cozma@gmail.com";
    $from = $_REQUEST['name'];
    $subject = "Mesaj de la: $from";
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $email";

    $fields = array();
    $fields{"name"} = "Nume";
    $fields{"email"} = "Email";
    $fields{"message"} = "Mesaj";

    $body = "Ai primit următorul mesaj:\n\n";
    foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
