<?php 
// http://localhost/tut-1/get-post-methods.php?name=mk&age=45

if( $_GET["name"] || $_GET["age"] ) {
    echo "Welcome ". $_GET['name']. "<br />";
    echo "You are ". $_GET['age']. " years old.";
    
    exit();
 }
?>
<html>
 <body>
 
    <form action = "<?php $_PHP_SELF ?>" method = "GET">
       Name: <input type = "text" name = "name" />
       Age: <input type = "text" name = "age" />
       <input type = "submit" />
    </form>
    
 </body>
</html>


