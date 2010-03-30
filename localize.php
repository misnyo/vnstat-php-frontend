<?php
    // setup locale and translation
    setlocale(LC_ALL, $locale);
	
    if(isset($_GET['lang']))
		$language = $_GET['lang'];
		
    require "lang/$language.php";

    function T($str)
    {
        global $L;
        if (isset($L[$str]))
            return $L[$str];
        else
            return $str;
    }

?>
