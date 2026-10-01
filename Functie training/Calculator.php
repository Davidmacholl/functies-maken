<?php

// functies toevoegen

function getNumber($message)
{
    echo $message;
    return (float)readline();
}

function getOperation()
{
    echo "Enter operation (+, -, *, /): ";
    return readline();
}

function calculate($num1, $num2, $operation)
{
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Division by zero is not allowed.";
            }
            return $num1 / $num2;
        default:
            return "Invalid operation";
    }
}
echo "Simple Calculator\n";
do {
    $num1 = getNumber("Enter first number: ");
    $operation = getOperation();
    $num2 = getNumber("Enter second number: ");
    $result = calculate($num1, $num2, $operation);
    echo "Result: $result\n";
    $again = strtolower(readline("calculate again? (y/n): "));
} while ($again === 'y');
echo "Cya \n";
