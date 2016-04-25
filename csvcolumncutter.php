<?php
//another copy
// removing unncessary columns from ebays report ready for mysql import 
	//removing old file
	
	/*
	$filename = 'C:/Users/Krys/Documents/a_eBay/v2/premier_wheels/ZZZ_multiREPORTER/ebayOUT/ebayout2mysql.csv';

	if (file_exists($filename)) {
		echo "The file $filename exists <br /> DELETING";
		unlink ($filename);
	} else {
		echo "The file $filename does not exist <br /> CREATING";
	}
	include('csvcolumncutter.php'); */

	$input = 'C:/Users/Krys/Documents/a_eBay/v2/premier_wheels/ZZZ_multiREPORTER/ebayOUT/ebayout.csv';
	$output = 'C:/Users/Krys/Documents/a_eBay/v2/premier_wheels/ZZZ_multiREPORTER/ebayOUT/ebayout2mysql.csv';

if (false !== ($ih = fopen($input, 'r'))) {
    $oh = fopen($output, 'w');

	//setting array to replace to get rid of currency
	$currency = array("£",",");
	
    while (false !== ($data = fgetcsv($ih))) {
        // this is where you build your new row and replacing for getting plain number for price value
        $outputData = array($data[0], $data[1], $data[5], str_ireplace($currency,"",$data[8]), $data[13], $data[14]);
        fputcsv($oh, $outputData);
    }

    fclose($ih);
    fclose($oh);
}

echo 'done<br /> CHANGE FORMAT OF FIRST COLUMN THEN UPLOAD TO MySql!!!';
?>