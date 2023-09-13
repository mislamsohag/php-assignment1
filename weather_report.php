<!-- 
Task 5: Weather Report
Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."
-->

<?php
$temperature = 25.5;

if ($temperature >= 26 && $temperature <= 40) {
    echo "It's warm and very hot temperature";
} else if ($temperature >= 10 && $temperature <= 25) {
    echo "It's cool and some warmer";
} else if ($temperature >= -5 && $temperature <= 10) {
    echo "It's freezing and so coooool!";
} else {
    echo "Please input range of -5 to 40 degree celsius avoid floting number";
}
