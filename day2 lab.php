<?php
#1
    // using /n on windows >> use the "\r\n"
    $text = "This is line 1\r\nThis is line 2\r\nThis is line 3";
    echo nl2br($text);


#2

// strlen
    $str = "Hello World!";
    $length = strlen($str);
    echo "<br>The length of the string is: " . $length;

// substr
    $str = "Hello World!";
    $substring = substr($str, 0, 5);
    echo "<br>The substring is: " . $substring;

// strpos
    $str = "Hello World!";
    $position = strpos($str, "World");
    echo "<br>The position of 'World' in the string is: " . $position;

#3
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

#4
    $array = array(12, 45, 10, 25);

    $sum = array_sum($array);

    $count = count($array);
    $avg = ($count > 0) ? ($sum / $count) : 0;

    echo "Sum: " . $sum . "<br>";
    echo "Average: " . $avg . "<br>";

    arsort($array);

    echo "Sorted Array (highest to lowest):<br>";
    foreach ($array as $value) {
        echo $value . "<br>";
    }

#5
    $array = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);

    asort($array);
    echo "Ascending order sort by value:<br>";
    print_r($array);
    echo "<br>";

    ksort($array);
    echo "Ascending order sort by key:<br>";
    print_r($array);
    echo "<br>";

    arsort($array);
    echo "Descending order sort by value:<br>";
    print_r($array);
    echo "<br>";

    krsort($array);
    echo "Descending order sort by key:<br>";
    print_r($array);
    echo "<br>";
?>