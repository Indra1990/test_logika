<?php
    function prima($angka)
    {
        for($i=1;$i<=$angka;$i++){  
              
            $counter = 0; 
            for($j=1;$j<=$i;$j++){ 
                
                  if($i % $j==0){ 
                      
                        $counter++;
                  }
            }
          
          if($counter==2){
                 print $i." is Prime <br/>";
          }
        }
    }

    echo prima(30);
?>