<?php
//Dependency Inversion Principle

/**
 * Rules
 *
 * 1. High-level modules should not depend on low-level modules. Both should depend on abstractions (e.g. interfaces).
 * 2. Abstractions should not depend on details. Details (concrete implementations) should depend on abstractions.
 */

class MainApplication {
    public function main()
    {
        $productRepository = ProductFactory::create();
        $productCatalog = new ProductCatalog($productRepository);

        $productCatalog->listAllProducts();
    }
}

class ProductFactory {
    public static function create(): ProductRepository
    {
        return new SQLProductRepository();
    }
}

class ProductCatalog {
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * ProductCatalog constructor.
     *
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function listAllProducts()
    {
        $allProductNames = $this->productRepository->getAllProductNames();
    }
}

interface ProductRepository {
    public function getAllProductNames();
}

class SQLProductRepository implements ProductRepository {
    public function getAllProductNames()
    {
        return array('a', 'b');
    }
}