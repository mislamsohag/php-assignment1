<!-- 
Task 7: Simple Calculator
Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.
Complete these tasks by writing PHP code that fulfills the requirements of each task. Feel free to enhance the tasks or add extra features if you'd like.
This assignment will help you practice your PHP skills and apply the concepts you've learned. Good luck!
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php
        include "style.css"
        ?>
    </style>
</head>

<body>
    <section class="wrapper">
        <div class="container">
            <h1>Basic Calculator</h1>
            
            <form class="form"  method="post" action="">
                <input class="userInput" type="number" name="num1" placeholder="Type your first number" required>
                <input class="userInput" type="number" name="num2" placeholder="Type your secound number" required>
                <label for="operation">Select want to your Mathmatical Operation</label>
                <select class="selectInput" name="operation" required>
                    <option value="addition">Addition</option>
                    <option value="subtraction">Subtraction</option>
                    <option value="mutltiplication">Mutltiplication</option>
                    <option value="devision">Devision</option>
                </select>
                <button type="submit" class="submitBtn">Submit</button>                
            </form>
            
            <div id="result">
                <?php
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $number1 = $_POST["num1"];
                        $number2 = $_POST["num2"];                        
                        $operation =$_POST["operation"];

                        switch($operation){
                            case "addition":
                                $result = $number1+$number2;
                                echo "Result: $result";
                                break;
                            case "subtraction":
                                $result = $number1-$number2;
                                echo "Result: $result";
                                break;
                            case "mutltiplication":
                                $result = $number1*$number2;
                                echo "Result: $result";
                                break;
                            case "devision":
                                $result = $number1/$number2;
                                echo "Result: $result";
                                break;
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</body>

</html>