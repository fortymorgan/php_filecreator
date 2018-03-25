#!/usr/bin/php
<?php
$params = getopt("a:s:");
//creating an array of numbers to post in file
function create_array($size) {
	for ($j = 1; $j <= $size; $j++) {
		$numarr[$j] = $j;
	}
	return $numarr;
}

//creating a couple of files
function create_files($amount, $size) {
	for ($i = 1; $i <= $amount; $i++) {
		$name = str_pad($i, strlen($amount), "0", STR_PAD_LEFT);

		$fp = fopen("$name.txt", "w");

		$numarr = create_array($size);

		//posting numbers from array multiplicated on file's number
		foreach ($numarr as $num) {
			$wnum = $num * $i;

			fwrite($fp, $wnum . "\r\n");
		}

		fclose($fp);
	}
}
create_files($params["a"], $params["s"]);
?>
