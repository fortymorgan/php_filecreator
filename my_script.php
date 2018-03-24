#!/usr/bin/php
<?php

//creating an array of numbers to post in file
for ($j = 1 ; $j <= 100 ; $j++) {
	$numarr[$j] = $j;
}

//creating a couple of files
for ($i = 1 ; $i <= 10 ; $i++) {
	$name = str_pad($i, 2, "0", STR_PAD_LEFT);

	$fp = fopen("$name.txt", "w");

	//posting numbers from array multiplicated on file's number
	foreach ($numarr as $num) {
		$wnum = $num * $i;

		fwrite($fp, $wnum . "\r\n");
	}

	fclose($fp);
}

?>