<!--Ans. to the Task No. 2; -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php
        include "style.css";
        ?>
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1>Temperature Converter</h1>
            <form method="post" action="temperature_converter.php">
                <input class="userInput" name="inputTemperature" type="number" placeholder="Input Your Temperature" required>

                <select name="inputType" class="selectInput" required>
                    <option value="celsius">Select Your Type</option>
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select>
                <button class="submitBtn" type="submit">Convert</button>
            </form>
            <h1 class="result">

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $inputValue = $_POST["inputTemperature"];

                    $selectValue = $_POST["inputType"];

                    if ($selectValue == "celsius") {
                        $result = (($inputValue * 9) / 5) + 32;
                        echo "Now Temperature is $result degre Fahrenheit";
                    } elseif ($selectValue == "fahrenheit") {
                        $result = (($inputValue - 32) * 5) / 9;
                        echo "Now Temperature is $result degre Celsius";
                    } else {
                        echo "Please Input Valid Number and Select which type of convert";
                    }
                }
                ?>

            </h1>
        </div>
    </div>
</body>

</html>