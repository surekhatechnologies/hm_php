<?php 
// src/Service/CircleService.php
namespace App\Service;

class CircleService
{
    private $radius = 0;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
	{
		return $this->radius; 			
	}

    public function getArea()
 	{
        $area = ( M_PI * pow($this->radius, 2) );
        return $area;
    }

    public function getCircumference()
	{
        $circumference = ( 2 * M_PI * $this->radius);
        return $circumference; 		
    }
}

?>