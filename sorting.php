<?php
  function sorting()
  {
        $bilangan = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);
        sort($bilangan, SORT_NUMERIC); 
        print_r($bilangan);
  }

    echo sorting();
?>