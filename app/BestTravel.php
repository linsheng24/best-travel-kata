<?php
namespace App;

class BestTravel
{

  public function chooseBestSum($maxAcceptedDistance, $townNumber, $townDistances) {
    
    $maxDistance = null;
    $townDistancesCombination = $this->combination_of_towns($townDistances, $townNumber);
    
    foreach ($townDistancesCombination as $townDistances) {
    
      $visitTownDistanceSum = array_reduce($townDistances, function ($carry, $Distance) {
        return $carry + $Distance;
      });

      if ($visitTownDistanceSum <= $maxAcceptedDistance) {
        $maxDistance = max($maxDistance, $visitTownDistanceSum);
      }
    
    }

    return $maxDistance;       
  }

  private function combination_of_towns($townDistances, $townNumber)
  {
    if (count($townDistances) == $townNumber) {
      return [$townDistances];
    }
    if (count($townDistances) < $townNumber || $townNumber == 0) {
      return [[]];
    }

    $remainItemsExceptfirstItem = array_slice($townDistances, 1);
    return array_merge(
      $this->merge_town_distance_to_combination($townDistances[0], 
      $this->combination_of_towns($remainItemsExceptfirstItem, $townNumber - 1)), $this->combination_of_towns($remainItemsExceptfirstItem, $townNumber)
    );

  }

  private function merge_town_distance_to_combination($townDistace, $distanceCombination)
  {
    return array_map(function ($combinationItem) use ($townDistace) {
      return array_merge((array)$townDistace, $combinationItem);
    }, $distanceCombination);
  }

}
