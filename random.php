<?php
srand( microtime() * 1000000 );
$num = rand( 1, 4 );

echo "$num <br>"; 

switch( $num ) {
   case 1: $image_file = "/php/images/logo.png";
      break;
   
   case 2: $image_file = "/php/images/php.jpg";
      break;
   
   case 3: $image_file = "/php/images/logo.png";
      break;
   
   case 4: $image_file = "/php/images/php.jpg";
      break;
}
echo "Random Image : <img src=$image_file />";
?>