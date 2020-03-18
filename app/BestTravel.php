<?php
namespace App;

class BestTravel
{

  public function chooseBestSum($t, $k, $ls) {
    
    $max = null;
    
    if ($k ==2) {
      for ($i = 0; $i < count($ls); $i ++) {
        for ($j = 0; $j < count($ls); $j ++) {
          if (($ls[$i] + $ls[$j]) <= $t) {
            $max = max($max, ($ls[$i] + $ls[$j]));
          }    
        }
      }
      return $max;
    }

    foreach ($ls as $value) {
      if ($value <= $t) {
        $max = max($max, $value);
      }
    }  

    return $max;      
  
  }

}
