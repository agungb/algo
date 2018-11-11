<?php
// function to check the number is Prime or Not
function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}

// Test Code
$number = 234;
$result = primeCheck($number);
if ($result == 1)
    echo "Prime";
else
    echo "Not Prime"
?>
