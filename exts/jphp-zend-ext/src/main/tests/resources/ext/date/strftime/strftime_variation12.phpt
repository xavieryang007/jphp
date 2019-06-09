--TEST--
Test strftime() function : usage variation - Checking month related formats which are supported other than on Windows.
--SKIPIF--
<?php
if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
    die("skip Test is not valid for Windows");
}
?>
--FILE--
<?php
/* Prototype  : string strftime(string format [, int timestamp])
 * Description: Format a local time/date according to locale settings
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing strftime() : usage variation ***\n";

// Initialise function arguments not being substituted (if any)
date_default_timezone_set("Asia/Calcutta");
$timestamp = mktime(8, 8, 8, 8, 8, 2008);

$format = "%h";
print_r( strftime($format) );
echo PHP_EOL;
var_dump( strftime($format, $timestamp) );

?>
===DONE===
--EXPECTF--
*** Testing strftime() : usage variation ***
%s
string(3) "Aug"
===DONE===
