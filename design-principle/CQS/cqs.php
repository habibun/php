<?php
namespace App;
use Ramsey\Uuid\Uuid;
class ProductService {
    private $products;
    public function __construct(ProductsRepositoryInterface $productsRepository)
    {
        $this->products = $productsRepository;
    }
    public function create(Uuid $id, string $name, int $amount = 0): void
    {
        if($this->products->findProductByName($name)) {
            throw new \InvalidArgumentException("A product with name $name already exists");
        }
        $product = new Product($id, $name, $amount);
        $this->products->save($product);
    }
    public function getByName(string $name): ?Product
    {
        return $this->products->findProductByName($name);
    }
}