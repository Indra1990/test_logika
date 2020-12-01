<?php

function nomer3()
{
    for ($i=1; $i<=8; $i++){
        for ($j=1; $j<=$i; $j++){
            echo $j;
        }echo "<br>";
    }
}
function nomer4()
{
    for ($i=1; $i <= 12 ; $i++) { 
      
        if ($i%4 == 1) {
            echo $i ."\t";
        }
      
    }  
    echo "\n";
    for ($i=1; $i <= 12 ; $i++) { 
         if ($i%4 == 2) {
            echo $i ."\t";
        }
    }
    echo "\n";
    for ($i=1; $i <= 12 ; $i++) { 
         if ($i%4 == 3) {
            echo $i ."\t";
        }
   }
   echo "\n";
   for ($i=1; $i <= 12 ; $i++) { 
    if ($i%4 == 0) {
        echo $i ."\t";
    }
   }
}

echo nomer4();
?>