<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

function is_fibonacci_sequence($a, $b, $c) {
    if ($a + $b == $c) {
        return true;
    } else if ($a + $b < $c) {
        return false;
    } else {
        return is_fibonacci_sequence($b, $c, $a+$b);
    }
}

if (is_fibonacci_sequence($num1, $num2, $num3)) {
    echo "$num1, $num2, $num3 are the Fibonacci sequence";
} else {
    echo "$num1, $num2, $num3 aren't the Fibonacci sequence";
}


