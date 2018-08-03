<?php

require_once("fetch.php");


if((sizeof($argv)) == 4){

	$type = $argv[1];
	$url = $argv[2];
	$path = $argv[3];
	$tmptype = "";

	switch($type){

		case "csv:simple":
			$tmptype = "w+";
			$fetch = new Fetch();
			$fetch->loader($tmptype, $url, $path);
			break;
		case "csv:extended":
			$tmptype = "a+";
			$fetch = new Fetch();
			$fetch->loader($tmptype, $url, $path);
			break;
		default:
			echo "Wrong type of file";

	}

	
}else{
	echo "ERROR! Write all arguments !";
}