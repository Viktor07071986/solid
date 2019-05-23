<?php
/**
 * SOLID
 * S - Принцип единственной обязанности (ответственности)
 * Single responsibility principle (SRP)
 */
//$product = new Product();
//$product->setPrice(10);
$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);