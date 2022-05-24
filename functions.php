<html>
   
   <head>
      <title>Writing PHP Function</title>
   </head>
   
   <body>
      
      <!-- <?php
         /* Defining a PHP Function */
         function writeMessage() {
            echo "You are really a nice person, Have a nice time!";
         }
         
         /* Calling a PHP Function */
         writeMessage();
      ?> -->
      <!-- PHP Functions with Parameters -->
      <!-- <?php
         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
         }
         
         addFunction(10, 20);
      ?> -->
   <!-- Passing Arguments by Reference -->
   <!-- <?php
         function addFive($num) {
            $num += 5;
         }
         
         function addSix(&$num) {
            $num += 6;
         }
         
         $orignum = 10;
         addFive( $orignum );
         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
      ?> -->
<!-- PHP Functions returning value -->
<!-- 
<?php
         function addFunctionTwo($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
         }
         $return_value = addFunctionTwo(10, 20);
         
         echo "Returned value from the function : $return_value";
      ?> -->
<!-- Setting Default Values for Function Parameters -->

<?php
//     function printMe($param = NULL) {
//     print $param;
//     }
    
//     printMe("This is test");
//     printMe();
// ?>

<!-- Dynamic Function Calls -->

<?php
    function sayHello() {
    echo "Hello<br />";
    }
    
    $function_holder = "sayHello";
    $function_holder();
?>

</body>
</html>