<?php
sleep(1.5);
$to = "changes.org@live.no";
$subject = stripslashes(strip_tags($_POST["subject"]));
$from = stripslashes(strip_tags($_POST["from"]));
$content = stripslashes(strip_tags($_POST["content"]));
$headers = "From: " . $from . "\r\n" .
        "X-Mailer: php";

if(filter_var($from, FILTER_VALIDATE_EMAIL)) {
    if (mail($to, $subject, $content, $headers)) {
        echo("true");
    } else {
        echo("false");
    }
}
else {
    echo ("false");
}

?>
