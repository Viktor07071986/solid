<?php
/**
 * SOLID
 * O - Принцип открытости/закрытости
 * Open/closed principle (OCP)
 */
$logger = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);