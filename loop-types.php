<?php

// // Loops in PHP are used to execute the same block of code a specified number of times. PHP supports following four loop types.

// // for − loops through a block of code a specified number of times.

// // while − loops through a block of code if and as long as a specified condition is true.

// // do...while − loops through a block of code once, and then repeats the loop as long as a special condition is true.

// // foreach − loops through a block of code for each element in an array.


// $a = 0;
// $b = 0;

// for( $i = 0; $i<5; $i++ ) {
//     $a += 10;
//     $b += 5;
// }

// echo ("At the end of the loop a = $a and b = $b" );

// The while loop statement 

// $i = 0;
// $num = 50;

// while( $i < 10) {
//     $num--;
//     $i++;
// }

// echo ("Loop stopped at i = $i and num = $num" );

// // do...while loop statement

// $i = 0;
// $num = 0;

// do {
//     $i++;
// }

// while( $i < 10 );
// echo ("Loop stopped at i = $i" );

// // Array loops

// $array = array( 1, 2, 3, 4, 5);
         
// foreach( $array as $value ) {
//     echo "Value is $value <br />";
// }

// // loop termination

// $i = 0;
         
// while( $i < 10) {
// $i++;
// if( $i == 3 )break;
// }
// echo ("Loop stopped at i = $i" );

// continue statement

$array = array( 1, 2, 3, 4, 5);
         
foreach( $array as $value ) {
    if( $value == 3 )continue;
        echo "Value is $value <br />";
}
?>