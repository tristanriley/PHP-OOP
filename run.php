<?php  
$var_name=false;  
if (is_bool($var_name))  
echo 'This is a boolean.';  
else  
echo 'This is not a boolean.';  
?>  

<?php  
$var_name=127.55;  
if (is_double($var_name))  
echo 'This is a double value.<br>';  
else  
echo 'This is not a double value.<br>';  
echo '<br>';  
var_dump(is_double(85));  
echo '<br>';  
var_dump(is_double(1e8));  
echo '<br>';  
var_dump(is_double(true));  
echo '<br>';  
var_dump(is_double(array(23.3, 56, 6)));  
?>  

<?php 
echo '<br>';   
$var_name=array('A','B','C');  
if (is_array($var_name))  
echo 'This is an array.';  
else  
echo 'This is not an array.';  
?> 
