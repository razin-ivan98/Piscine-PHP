#!/usr/bin/php
<?php
    function cmp($a, $b)
    {
        $a = strtolower($a);
        $b = strtolower($b);

        $l_a = strlen($a);
        $l_b = strlen($b);

        $i = 0;
        $comp = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

        while (($i < $l_a) and ($i < $l_b))
        {
            if ($a[$i] == $b[$i])
            {
                $i++;
                continue;
            }
            return strpos($comp, $a[$i]) < strpos($comp, $b[$i]) ? -1 : 1;
        }
        return $l_a >= $l_b ? true : false;
    }

    $array = array();

    unset($argv[0]);
    foreach($argv as $elem)
    {
        $tmp = array_filter(explode(" ", $elem));
        foreach($tmp as $elem2)
        {
            $array[] = $elem2;
        }
    }
    usort($array, "cmp");
    foreach ($array as $elem)
        echo $elem."\n";
?>