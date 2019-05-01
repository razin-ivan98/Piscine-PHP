#!/usr/bin/php
<?php
    $stdin = fopen("php://stdin", "r");
    while ($stdin && !feof($stdin))
    {
        echo "Enter a number: ";
        $line = fgets($stdin);
        if ($line)
        {
            $line = str_replace("\n", "", $line);
            if (is_numeric($line))
            {
                if ($line % 2 == 0)
                    echo "The number ".$line." is even\n";
                else
                    echo "The number ".$line." is odd\n";
            }
            else
            {
                echo "'".$line."' is not a number\n";
            }
        }
    }
    fclose($stdin);
    echo "\n";
?>