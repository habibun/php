<?php

class ProductController extends BaseController
{
    protected $productRepository;

    // $productRepository will call the methods from the
    // class defined above in the service provider
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $products = $this->productRepository->search($name);
        return view('home.index', ['products' => $products]);
    }
}