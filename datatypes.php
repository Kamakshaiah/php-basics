<?php 

// PHP has a total of eight data types which we use to construct our variables −

// Integers − are whole numbers, without a decimal point, like 4195.

// Doubles − are floating-point numbers, like 3.14159 or 49.1.

// Booleans − have only two possible values either true or false.

// NULL − is a special type that only has one value: NULL.

// Strings − are sequences of characters, like 'PHP supports string operations.'

// Arrays − are named and indexed collections of other values.

// Objects − are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class.

// Resources − are special variables that hold references to resources external to PHP (such as database connections). 

// $stringvar = "Hi I am kamakshaiah </br>"; 
// print "$stringvar"; 

// $intvar = 123; 
// $doublevar = 1.5; 
// $floatvar = 1.5; 

// $arrayofnums = ["$intvar", "$doublevar", "$floatvar"];  

// print implode("<br>", $arrayofnums); 

// $var1 = 2; 
// $var2 = 3; 
// $var3 = $var1 + $var2; 


// function sayHello($name) {
//     print "<h1> Hi, welcome to $name </h1>"; 
// }

// echo "<br> The sum of $var1 and $var2 is: $var3 <br>"; 
// sayHello("mk"); 

// $many = 2.2888800;
// $many_2 = 2.2111200;
// $few = $many + $many_2;

// print("$many + $many_2 = $few <br>");

// if (TRUE)
//    print("This will always print<br>");

// else
//    print("This will never print<br>");

// Each of the following variables has the truth value embedded in its name when it is used in a Boolean context.

// $true_num = 3 + 0.14159;
// $true_str = "Tried and true"
// $true_array[49] = "An array element";
// $false_array = array();
// $false_null = NULL;
// $false_num = 999 - 999;
// $false_str = "";


// if ($false_str=="")
//     echo "This test works as boolean value"
// 

// $string_1 = "This is a string in double quotes";
// $string_2 = 'This is a somewhat longer, singly quoted string';
// $string_39 = "This string has thirty-nine characters";
// $string_0 = ""; // a string with zero characters

// $variable = "name";
// $literally = 'My $variable will not print!';

// print($literally);
// print "<br>";

// $literally = "My $variable will print!";
// print($literally);

// The escape-sequence replacements are −

// \n is replaced by the newline character
// \r is replaced by the carriage-return character
// \t is replaced by the tab character
// \$ is replaced by the dollar sign itself ($)
// \" is replaced by a single double-quote (")
// \\ is replaced by a single backslash (\)

$channel =<<<_XML_
   
<channel>
    <title>What's For Dinner</title>
    <link>http://menu.example.com/ </link>
    <description>Choose what to eat tonight.</description>
</channel>
_XML_;

echo <<<END
This uses the "here document" syntax to output multiple lines with variable 
interpolation. Note that the here document terminator must appear on a line with 
just a semicolon. no extra whitespace!


END;

print $channel;
?>