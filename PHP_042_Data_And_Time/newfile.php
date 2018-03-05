
<!-- 
PHP 5 Date and Time
The PHP date() function is used to
 format a date and/or a time.
 
The PHP Date() Function
The PHP date() function formats a timestamp to a more readable date and time.

Syntax
date(format,timestamp)
Parameter	Description
format	Required. Specifies the format of the timestamp
timestamp	Optional. Specifies a timestamp. Default is the current date and time
A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occurred.

Get a Simple Date
The required format parameter of the date() function specifies how to format the date (or time).

Here are some characters that are commonly used for dates:

d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.

The example below formats today's date in three different ways:

 -->
 
 
 
<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<!--PHP Tip - Automatic Copyright Year 
Use the date() function to automatically update the 
copyright year on your website:
 -->
&copy; 2010-<?php echo date("Y");?>

<!-- 
Get a Simple Time
Here are some characters that are commonly used for times:

h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
The example below outputs the current time in the specified format:

 -->
<?php
echo "The time is " . date("h:i:sa");
?>
<!--  Note that the PHP date() function will return the current date/time of the server! -->

<!--  
Get Your Time Zone
If the time you got back from the code is not the right time, it's probably because your server is in another country or set up for a different timezone.

So, if you need the time to be correct according to a specific location, you can set a timezone to use.

The example below sets the timezone to "America/New_York", then outputs the current time in the specified format:
 -->
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

<!-- 
Create a Date With PHP mktime()
The optional timestamp parameter in the date() function specifies a timestamp. If you do not specify a timestamp, the current date and time will be used (as shown in the examples above).

The mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
Syntax
mktime(hour,minute,second,month,day,year)

 -->
 
 <?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<!--  
Create a Date From a String With PHP strtotime()
The PHP strtotime() function is used to convert a human readable string to a Unix time.

Syntax
strtotime(time,now)

 -->
 
 <?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<!-- PHP is quite clever about converting a string to a date, so you can put in various values: -->
<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>


<!--  
More Date Examples
The example below outputs the dates for the next six Saturdays:

 -->

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>

</body>
</html>
