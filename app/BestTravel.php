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

  public function combination($arr, $n)
  {
    if (count($arr) == $n) {
      return [$arr];
    }
    if (count($arr) == 0 || $n == 0) {
      return [[]];
    }

    $remain_items = array_slice($arr, 1);
    return array_merge($this->merge($arr[0], $this->combination($remain_items, $n - 1)), $this->combination($remain_items, $n));

  }

  public function merge($add, $arr)
  {
    return array_map(function ($item) use ($add) {
      return array_merge((array)$add, $item);
    }, $arr);
  }

}
