<!-- Task 3: Grade Calculator
Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade.
-->

<?php

$bangla=80;
$english=47;
$math=46;

$average=($bangla+$english+$math)/3;

if($average>=80 && $average<=100){
    echo "Your Letter Grade: 'A+'";
}elseif($average>=70 && $average<=79){
    echo "Your Letter Grade: 'A'";
}
elseif($average>=60 && $average<=69){
    echo "Your Letter Grade: 'A-'";
}
elseif($average>=50 && $average<=59){
    echo "Your Letter Grade: 'B'";
}
elseif($average>=40 && $average<=49){
    echo "Your Letter Grade: 'C'";
}
elseif($average>=33 && $average<=39){
    echo "Your Letter Grade: 'D'";
}else{
    echo "Your are Faild and try to again with hardwork";
}
