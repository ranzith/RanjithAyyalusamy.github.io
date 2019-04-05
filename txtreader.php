<?php  
$myfile = "new7.txt";  
if (is_readable($myfile))  
{ 
    readfile($myfile); 
}
  
else 

{ 
    echo '$myfile is not readable'; 
} 
?>