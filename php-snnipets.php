<?php

  // getting current year & next year string ex. 20-21
  $year_duration = date("y")."-".date('y', strtotime('+1 year'));

	//function for serch a string between two words, usefull for search in a html page 
	function search_string_between($string, $start, $end) {
		$string = ' ' . $string;
		$ini = strpos($string, $start);
		if ($ini == 0) return '';
		$ini += strlen($start);
		$len = strpos($string, $end, $ini) - $ini;
		return substr($string, $ini, $len);
  }
  
  //function for replace a string between two words, usefull for replace string in a html page 
	function replace_string_between($str, $needle_start, $needle_end, $replacement) {
		$pos = strpos($str, $needle_start);
		$start = $pos === false ? 0 : $pos + strlen($needle_start);
		$pos = strpos($str, $needle_end, $start);
		$end = $start === false ? strlen($str) : $pos;
		return substr_replace($str,$replacement,  $start, $end - $start);
	}


// fetch financial year from invoice date -- On Development
$invoice_date = "30-12-2020";
  
$date=date_create($invoice_date);
 $date1= date_format($date,"Y-m-d");

$invoice_year = date('Y', strtotime($date1));
echo $financial_date    = "$invoice_year-03-31";

if ($date1 < $financial_date) {
    
    echo $year_duration = date("y",strtotime($date1))."-".date('y', strtotime('+1 year', strtotime($date1)));
  
} else {
  
   echo $year_duration = date("y",strtotime('+1 year', strtotime($date1)))."-".date('y', strtotime('+2 year', strtotime($date1)));
} 


?>