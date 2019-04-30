#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $array = array_filter(explode(" ", $argv[1]));
        $ret = "";
        foreach($array as $elem)
            $ret .= $elem." ";
        echo trim($ret)."\n";
    }
?>