<!-- 
Task 4: Even or Odd Checker
Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Number Checker</title>
    <style>
        <?php
        include "style.css";
        ?>
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <h1>Even or Odd Number Checker</h1>
            <form method="post" action="even_odd_checker.php">
                <input class="userInput" name="inputValue" type="number" placeholder="Input Number" required>

                <button class="submitBtn" type="submit">Check Number</button>
            </form>
            <h1 class="result">

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $inputValue = $_POST["inputValue"];

                    function even_odd_checker($number)
                    {
                        if ($number % 2 == 0) {
                            echo "$number is Even Number";
                        } else {
                            echo "$number is Odd Number";
                        }
                    }
                    even_odd_checker($inputValue);
                }
                ?>
            </h1>
        </div>
    </div>

</body>

</html>