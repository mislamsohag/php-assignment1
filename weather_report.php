
<!-- 
Task 5: Weather Report
Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."
-->

<?php
$temperature=44;

if($temperature>=26 && $temperature <=40){
    echo "It's warm and very hot temperature";

}
else if($temperature>=10 && $temperature <=25){
    echo "It's cool and some warmer";

}
else if($temperature>=10 && $temperature <=25){
    echo "It's cool and some warmer";

}