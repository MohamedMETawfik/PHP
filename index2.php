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

#4
    $array = array(12, 45, 10, 25);

    // Calculate the sum of the array
    $sum = array_sum($array);

    // Calculate the average of the array
    $count = count($array);
    $avg = ($count > 0) ? ($sum / $count) : 0;

    // Output the results
    echo "Sum: " . $sum . "<br>";
    echo "Average: " . $avg . "<br>";

    // Sort the array in reverse order
    arsort($array);

    // Output the sorted array
    echo "Sorted Array (highest to lowest):<br>";
    foreach ($array as $value) {
        echo $value . "<br>";
    }

#5
    // Define the associative array
    $array = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);

    // Sort the array in ascending order by value
    asort($array);
    echo "Ascending order sort by value:<br>";
    print_r($array);
    echo "<br>";

    // Sort the array in ascending order by key
    ksort($array);
    echo "Ascending order sort by key:<br>";
    print_r($array);
    echo "<br>";

    // Sort the array in descending order by value
    arsort($array);
    echo "Descending order sort by value:<br>";
    print_r($array);
    echo "<br>";

    // Sort the array in descending order by key
    krsort($array);
    echo "Descending order sort by key:<br>";
    print_r($array);
    echo "<br>";
?>