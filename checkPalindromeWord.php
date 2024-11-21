<?php

function palindromeChech($word){
    
    $toArray = str_split($word);
    $countString = count($toArray);
    $getMiddle = ceil($countString/2) - 1;
    $temp = [];
    $temp2 = [];
    $check = 0;
    for ($i=0; $i < $getMiddle  ; $i++) { 
        $temp[] = $toArray[$i];
    }
    // echo print_r($temp,1);
    
    for ($i=$countString-1; $i > $getMiddle  ; $i--) { 
        $temp2[] = $toArray[$i];
    }
    // echo print_r($temp2,1);
    
    for ($i=0; $i < $getMiddle  ; $i++) { 
        if($temp[$i] != $temp2[$i] ){
            $check++;
        }
    }
    
    if($check == 0){
        return "kata tersebut palindrom !";
    }else{
        return "kata tersebut Tidak palindrom !";
    }
    
}

echo palindromeChech("tenet");

?>