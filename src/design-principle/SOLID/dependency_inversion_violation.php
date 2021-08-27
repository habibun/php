<?php
// Dependency Inversion Principle Violation

/**
 * Rules
 *
 * 1. High-level modules should not depend on low-level modules. Both should depend on abstractions (e.g. interfaces).
 * 2. Abstractions should not depend on details. Details (concrete implementations) should depend on abstractions.
 */


/**
 * Violations
 *
 * High level modules depend on low level modules and no abstraction at all.
 *
 */

class ProductCatalog {
    public function listAllProducts()
    {
        $sqlProductRepository = new SQLProductRepository();
        $allProductNames = $sqlProductRepository->getAllProductNames();
    }
}

class SQLProductRepository {
    public function getAllProductNames()
    {
        return array('a', 'b');
    }
}

