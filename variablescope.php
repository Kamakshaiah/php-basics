<?php

    // Local variables
    // $x = 4;

    // function assignx () { 
    //     $x = 0;
    //     print "\$x inside function is $x. <br />";
    // }

    // assignx();
    // print "\$x outside of function is $x. <br />";


//   Function Parameters
//     Function parameters are declared after the function name and inside parentheses. They are declared much like a typical variable would be −

//  Live Demo


   // multiply a value by 10 and return it to the caller
//    function multiply ($value) {
//       $value = $value * 10;
//       return $value;
//    }
   
//    $retval = multiply (10);
//    Print "Return value is $retval\n";

// Global variables
// $somevar = 15;
   
// function addit() {
//     GLOBAL $somevar;
//     $somevar++;
    
//     print "Somevar is $somevar";
// }

// addit();

// Static variables

function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "<br />";
 }
 
 keep_track();
 keep_track();
 keep_track();


?>

