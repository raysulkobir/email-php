<?php
    $ot = "raysul97@gmail.com";
    $form = "kamal <raysul@gmail.com>";
    $subject = "Hello";
    $body = "This is a email body";
    $body .= 'https://www.raysul.me/uploads/Profile/Raysul-User-profile.jpg';
    $header .= "MINE-Version 1.0 \r\n";
    $header = "this is a header";

    echo mail($ot, $subject, $body, $header);