#!/usr/bin/php
<?php
    date_default_timezone_set('Europe/Paris');
    $file = fopen("/var/run/utmpx", "r");
    while ($utmpx = fread($file, 628))
    {
        $unpack = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $utmpx);
        $array[$unpack['line']] = $unpack;
    }
    ksort($array);
    foreach ($array as $v)
        if ($v['type'] == 7)
            printf("%-7s  %-7s  %s \n", $v["user"], $v["line"], date("M  j H:i", $v["time1"]));
?>