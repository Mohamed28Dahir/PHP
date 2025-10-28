<?php 

function greeting($Name= "Everyone"){
    echo "Hello $Name! <br>";
}
greeting("Mohamed");
greeting("Hani");
greeting("Hashim");


//Factoral

function Factoral($Num){
    $result = 1;
    for($i =$Num; $i>=1; $i--){
        $result *= $i;
    }
    return $result;

    
}
?>