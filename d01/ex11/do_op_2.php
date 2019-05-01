#!/usr/bin/php
<?php
    if ($argc != 2)
    {
        echo "Incorrect Parameters\n";
        exit;
    }
    if (count(array_filter(explode(" ", $argv[1]))) > 3)
    {
        echo "Syntax Error\n";
        exit;
    }
    sscanf($argv[1], "%d%1s%d", $a, $op, $b);
    if (!is_numeric($a) or !is_numeric($b) or strpos("+*-/%", $op) === false)
    {
        echo "Syntax Error\n";
        exit;
    }
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
    }
?>