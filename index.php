<?php
phpinfo();

echo "<br>";

define("WEBSITE_NAME", "My Website");

echo WEBSITE_NAME;

echo "<br>";

print_r($_SERVER['SERVER_NAME']);
echo "<br>";
print_r($_SERVER['SERVER_ADDR']);
echo "<br>";
print_r ($_SERVER['SERVER_PORT']);
echo "<br>";
print_r($_SERVER['SCRIPT_FILENAME']);
echo "<br>";
print_r($_SERVER['SCRIPT_NAME']);

echo "<br>";

$age = 10;

switch ($age) {
    case ($age < 5):
        echo "Stay at home";
        break;
    case ($age == 5):
        echo "Go to Kindergarden";
        break;
    case ($age >= 6 && $age <= 12):
        echo "Go to grade: " . ($age - 5);
        break;
    default:
        echo "Age is not within the specified range";
        break;
}
?>