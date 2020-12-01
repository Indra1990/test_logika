<?php
  function terbesar()
  {
      $max = 0;
      $bilangan = array(11,6, 31, 201, 99, 861, 1, 7, 14, 79);

      for ($i=0; $i < count($bilangan) ; $i++) { 
          if($bilangan[$i] > $max){
            $max = $bilangan[$i];
          }
      }

      echo "bilangan terbesar <b>".$max."</b>";
      
  }

    echo terbesar();
?>