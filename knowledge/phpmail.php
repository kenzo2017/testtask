<?php
$to = "mustardseed19@gmail.com";
$subject = "signup form";
$txt = "https://drive.google.com/open?id=10xcRYTos5MV7GvZ6v1MNWnZ1g9j9tphN";
$headers = "From: mustardseed19@gmail.com" . "\r\n" .
"CC: barrackoboma@gmail.com";

mail($to,$subject,$txt,$headers);
?>