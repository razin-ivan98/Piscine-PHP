#!/usr/bin/php
<?php
    function to_u($matches)
    {
        return ($matches[1].strtoupper($matches[2]).$matches[3]);
    }

	if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$read = fopen($argv[1], 'r');
	$page = "";
    while ($read && !feof($read)) {
        $page .= fgets($read);
    }
    $page = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/",
        function($matches)
        {
            $matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/", "to_u", $matches[0]);
            $matches[0] = preg_replace_callback("/(>)(.*?)(<)/", "to_u", $matches[0]);
            return ($matches[0]);
        },
        $page);
    echo $page;
?>