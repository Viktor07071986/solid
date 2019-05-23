<?php

class Product {

    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function setPrice () {
        try {
            // save price in db
        } catch (DbException $e) {
            // $this->logError($e->getMessage());
            $this->logger->log($e->getMessage());
        }
    }

    /*
        public function logError($error) {
            // save error message
        }
    */

}