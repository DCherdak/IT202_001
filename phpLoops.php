<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(1,2,3,4,5,6,7,8,9,10);

echo "#2 - all numbers <br>";
foreach( $numbers as $value ) {
           echo "$value <br>";
         }
?>

<br>

<?php
echo"#3 - only evens<br>";
foreach( $numbers as $value ) {
        if($value%2 == 0){
        	echo "$value <br>";	
        } 
    }

?>

</body>
</html>