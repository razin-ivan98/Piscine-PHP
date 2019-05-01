#!/usr/bin/php
<?php
    if ($argc != 4)
    {
        echo "Incorrect Parameters\n";
        exit;
    }
    $a = trim($argv[1]);
    $b = trim($argv[3]);
    $op = trim($argv[2]);
    if (!ctype_digit($a) or !ctype_digit($b) or strpos("+-*/%", $op) === false)
        echo "Incorrect Parameters\n";
    else
    {
        switch ($op)
        {
            case "+":
                echo $a + $b . "\n";
                break;
            case "-":
                echo $a - $b . "\n";
                break;
            case "*":
                echo $a * $b . "\n";
                break;
            case "/":
                echo $a / $b . "\n";
                break;
            case "%":
                echo $a % $b . "\n";
                break;
            default:
                echo "Incorrect Parameters\n";
        }
    }
?>