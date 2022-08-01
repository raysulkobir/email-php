<?php
    $ot = "raysul97@gmail.com";
    $form = "kamal <raysul@gmail.com>";
    $subject = "Hello";
    $body = "This is a email body";
    $header = "this is a header";

    echo mail($ot, $subject, $body, $header);