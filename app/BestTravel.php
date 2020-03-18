<?php
namespace App;

class BestTravel
{

  public function chooseBestSum($t, $k, $ls) {
    
    $max = null;

    $combin_arr = $this->combination($ls, $k);
    var_dump($combin_arr);
    foreach ($combin_arr as $value) {
    
      $sum = array_reduce($value, function ($carry, $item) {
        return $carry + $item;
      });

      if ($sum <= $t) {
        $max = max($max, $sum);
      }
    
    }

    return $max;      
  
  }

  private function combination($arr, $n)
  {
    if (count($arr) == $n) {
      return [$arr];
    }
    if (count($arr) < $n || $n == 0) {
      return [[]];
    }

    $remain_items = array_slice($arr, 1);
    return array_merge($this->merge($arr[0], $this->combination($remain_items, $n - 1)), $this->combination($remain_items, $n));

  }

  private function merge($add, $arr)
  {
    return array_map(function ($item) use ($add) {
      return array_merge((array)$add, $item);
    }, $arr);
  }

}
