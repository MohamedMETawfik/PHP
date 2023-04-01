<?php
#1
    // using /n on windows >> use the "\r\n"
    $text = "This is line 1\r\nThis is line 2\r\nThis is line 3";
    echo nl2br($text);
#2

#3
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
?>