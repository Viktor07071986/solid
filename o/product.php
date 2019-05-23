<?php

class Product {

    private $logger;

    public function __construct(ILogger $logger) {
        $this->logger = $logger;
    }

    public function setPrice () {
        try {
            // save price in db
        } catch (DbException $e) {
            $this->logger->log($e->getMessage());
        }
    }

}