<?php

namespace Creational\Pool;

class CarPool
{
    /**
     * @var Car []
     */
    private $occupiedCars = [];

    /**
     * @var Car []
     */
    private $freeCars = [];

    public function getCar() : Car
    {
        if ( count( $this->freeCars ) == 0 ) {
            $car = new Car();
        }else {
            $car = array_pop( $this->freeCars );
        }

        $this->occupiedCars[ spl_object_hash( $car ) ] = $car;

        return $car;
    }

    public function dispose(Car $car) : void
    {
        $hashedKey = spl_object_hash( $car );

        if ( isset( $this->occupiedCars[$hashedKey] ) ) {
            unset( $this->occupiedCars[$hashedKey]  );
            $this->freeCars[$hashedKey] = $car;
        }
    }

    public function countOccupiedCars() : int
    {
        return count( $this->occupiedCars );
    }

    public function countFreeCars() : int
    {
        return count( $this->freeCars );
    }

    public function countTotalCars() : int
    {
        return $this->countOccupiedCars() + $this->countFreeCars();
    }

}