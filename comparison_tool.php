
<!-- 
Task 6: Comparison Tool
Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator.
Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.
Or, declare 2 variable numbers and use the ternary operator to determine the large number and display the result   
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison</title>
    <style>
        <?php
            include "style.css";
        ?>
    </style>
</head>
<body>
    
<div class="wrapper">
        <div class="container">
            <h1>Max Number Checker</h1>
            <form method="post" action="comparison_tool.php">
                <input class="userInput" name="number1" type="number" placeholder="Input First Number" required>
                <input class="userInput" name="number2" type="number" placeholder="Input Anothe Number" required>
                
                <button class="submitBtn" type="submit">Max Checker</button>
            </form>

            <h1 class="result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $inputValue1 = $_POST["number1"];
                    $inputValue2 = $_POST["number2"];

                    $result=($inputValue1>$inputValue2) ? "$inputValue1 greater then $inputValue2": "$inputValue1 less then $inputValue2";
                    echo $result;
                }
                ?>

            </h1>
        </div>
    </div>

</body>
</html>