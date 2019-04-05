<?php
namespace tsp;

class City {
    //public $city_name;
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        //$this.city_name=city_name;
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
   
    public function distanceTo(City $city) {
        $xDistance = abs($this->getX() - $city->getX());
        $yDistance = abs($this->getY() - $city->getY());

        $distance = sqrt( ($xDistance*$xDistance) + ($yDistance*$yDistance) );

        return $distance;
    }

    public function __toString()
    {
        return $this->getX() . ', '  . $this->getY();
    }
}