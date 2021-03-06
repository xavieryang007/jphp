--TEST--
Test strftime() function : usage variation - Passing week related format strings to format argument.
--FILE--
<?php
/* Prototype  : string strftime(string format [, int timestamp])
 * Description: Format a local time/date according to locale settings
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing strftime() : usage variation ***\n";

date_default_timezone_set("Asia/Calcutta");
// Initialise function arguments not being substituted (if any)
$timestamp = mktime(8, 8, 8, 8, 8, 2008);

//array of values to iterate over
$inputs = array(
      'Abbreviated weekday name' => "%a",
      'Full weekday name' => "%A",
	  'Week number of the year' => "%U",
	  'Week number of the year in decimal number' => "%W",
);
// loop through each element of the array for timestamp

foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      print_r( strftime($value) );
      echo PHP_EOL;
      var_dump( strftime($value, $timestamp) );
};

?>
===DONE===
--EXPECTF--
*** Testing strftime() : usage variation ***

--Abbreviated weekday name--
%s
string(3) "Fri"

--Full weekday name--
%s
string(6) "Friday"

--Week number of the year--
%d
string(2) "31"

--Week number of the year in decimal number--
%d
string(2) "31"
===DONE===
