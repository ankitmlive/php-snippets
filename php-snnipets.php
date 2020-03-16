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
/*  $invoice_date = "28-02-2018";
  $date=date_create($invoice_date);
  echo date_format($date,"Y/m/d");
  
  echo $invoice_year = date('Y', strtotime($invoice_date)) . "<br>";
  echo $financial_date    = "31-03-$invoice_year". "<br>";

  $dateTimestamp1 = strtotime($invoice_date); 
  $dateTimestamp2 = strtotime($financial_date); 

  if ($dateTimestamp1 < $dateTimestamp2) {
    
      echo $year_duration = date("y", strtotime('-1 year'))."-".date('y');
    
  } else {
    
    //echo $year_duration = date("y")."-".date('y', strtotime('+1 year'));
  } */


?>