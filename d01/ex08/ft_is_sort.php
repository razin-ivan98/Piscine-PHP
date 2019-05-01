#!/usr/bin/php
<?php
    function ft_is_sort($array)
    {
        $array_sorted = $array;
        sort($array_sorted);
        if (array_diff_assoc($array_sorted, $array) == null)
            return true;
        return false;
    }
?>