<?php
namespace App;
use Ramsey\Uuid\Uuid;
class ProductService {

    private $products;

    public function __construct(ProductsRepositoryInterface $productsRepository)
    {
        $this->products = $productsRepository;
    }

    /**
     * create() method both modifies the system state and returns a value so it breaks the CQS principle
     *
     */
    public function create(Uuid $id, string $name, int $amount = 0): Product
    {
        if($this->products->findProductByName($name)) {
            throw new \InvalidArgumentException("A product with name $name already exists");
        }
        $product = new Product($id, $name, $amount);
        $this->products->save($product);

        return $product;
    }
}