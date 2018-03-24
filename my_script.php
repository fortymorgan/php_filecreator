#!/usr/bin/php
<?php

//creating an array of numbers to post in file
function create_array($size) {
	for ($j = 1; $j <= $size; $j++) {
		$numarr[$j] = $j;
	}
	return $numarr;
}

//creating a couple of files
function create_files($amount) {
	for ($i = 1; $i <= $amount; $i++) {
		$name = str_pad($i, 2, "0", STR_PAD_LEFT);

		$fp = fopen("$name.txt", "w");

		$numarr = create_array(100);

		//posting numbers from array multiplicated on file's number
		foreach ($numarr as $num) {
			$wnum = $num * $i;

			fwrite($fp, $wnum . "\r\n");
		}

		fclose($fp);
	}
}
create_files(10);
?>
