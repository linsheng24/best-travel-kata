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

  public function testCountOnesBasics() {
    $ts = [50, 55, 56, 57, 58];
    $this->assertEquals(163, $this->travel->chooseBestSum(163, 3, $ts));
    $ts = [50];
    $this->assertEquals(null, $this->travel->chooseBestSum(163, 3, $ts));
    $ts = [91, 74, 73, 85, 73, 81, 87];
    $this->assertEquals(228, $this->travel->chooseBestSum(230, 3, $ts));
  }
  
}
