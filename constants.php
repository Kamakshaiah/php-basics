
<?php
//     // constant() example
//    define("MINSIZE", 50);
   
//    echo MINSIZE;
//    echo constant("MINSIZE"); // same thing as the previous line

// Valid constant names
define("ONE", "first thing");
define("TWO2", "second thing");
define("THREE_3", "third thing");
define("__THREE__", "third value");

// Invalid constant names
define("2TWO", "second thing");

echo __THREE__;
// echo 2TWO; // will throw error


?>