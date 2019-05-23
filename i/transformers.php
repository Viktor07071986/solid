<?php

//class SuperTransformer implements ISuperTransformer {
class SuperTransformer implements ICarTransformer, IPlaneTransformer, IShipTransformer {
    public function toCar() {
        echo 'transform to car';
    }

    public function toPlane() {
        echo 'transform to plane';
    }

    public function toShip() {
        echo 'transform to ship';
    }
}

/*
class CarTransformer implements ISuperTransformer {

    public function toCar() {
        echo 'transform to car';
    }

    public function toPlane() {
        throw new Exception('i can`t transform to plane');
    }

    public function toShip() {
        throw new Exception('i can`t transform to ship');
    }
}
*/

class CarTransformer implements ICarTransformer {

    public function toCar() {
        echo 'transform to car';
    }

}