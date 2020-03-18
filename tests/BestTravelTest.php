<?php
namespace Tests;

use App\BestTravel;
use PHPUnit\Framework\TestCase;

class BestTravelTest extends TestCase
{
  protected function setUp():void
  {
    parent::setUp();
    $this->travel = new BestTravel();
    $this->ts = [50, 55, 56, 57, 58, 20, 30];
  }

  protected function tearDown():void
  {
    $this->travel = null;
  }

  /**
   * @test
   */
  public function chooseBestSum_Givet10k1_ReturnNull()
  {
    //Arrange
    $t = 10;
    $k = 1;
    $ts = $this->ts;
    
    $expected = null;
    //Act
    $actual = $this->travel->chooseBestSum($t, $k, $ts);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function chooseBestSum_Givet85k2_Return85()
  {
    //Arrange
    $t = 85;
    $k = 2;
    $ts = $this->ts;
    
    $expected = 85;
    //Act
    $actual = $this->travel->chooseBestSum($t, $k, $ts);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function chooseBestSum_Givet25k1_Return20()
  {
    //Arrange
    $t = 25;
    $k = 1;
    $ts = $this->ts;

    $expected = 20;
    //Act
    $actual = $this->travel->chooseBestSum($t, $k, $ts);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }
  
}
