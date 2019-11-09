<?php
/* Realizar una función factorial de un número natural n >0.
Obtener Factorial(5)=5*4*3*2*1=120 */

function fact ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * fact($n - 1);  
    }  
}  
  
echo "El factorial es: ". fact(5);  

?>