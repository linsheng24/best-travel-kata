<?php
namespace App;

class BestTravel
{

  public function chooseBestSum($t, $k, $ls) {
    
    $max = null;
    
    foreach ($ls as $value) {
      if ($value <= $t) {
        $max = max($max, $value);
      }
    }  

    return $max;      
  
  }

}
