<?php
class factorial{
public static function resultado($nro1)
{
    $factorial = 1; 
    for ($i=1; $i <=$nro1 ; $i++) { 
            $factorial = $factorial * $i; 
        } 
          echo $factorial; 

    }   
} 
