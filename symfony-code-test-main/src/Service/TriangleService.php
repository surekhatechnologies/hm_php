<?php 
// src/Service/TriangleService.php
namespace App\Service;

class TriangleService
{
    private $sideA = 0;
    Private $sideB = 0;
    Private $sideC = 0;

    public function __construct($sideA, $sideB, $sideC)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    public function getSideA()
	{
		return $this->sideA; 			
	}

    public function getSideB()
	{
		return $this->sideB; 			
	}

    public function getSideC()
	{
		return $this->sideC; 			
	}

    public function getArea()
 	{
        $s = ($this->sideA + $this->sideB + $this->sideC) / 2; 
        $area = sqrt($s * ($s - $this->sideA) * ($s - $this->sideB) * ($s - $this->sideC));
        return $area;
    }

    public function getCircumference()
	{
        $circumference = ($this->sideA + $this->sideB + $this->sideC);
        return $circumference; 		
    }
}

?>