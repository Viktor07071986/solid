<?php
/**
 * SOLID
 * I - Принцип разделения интерфейса
 * Interface Segregation Principle (ISP)
 */

/*
interface ISuperTransformer {
    public function toCar();
    public function toPlane();
    public function toShip();
}
*/

interface ICarTransformer {
    public function toCar();
}

interface IPlaneTransformer {
    public function toPlane();
}

interface IShipTransformer {
    public function toShip();
}