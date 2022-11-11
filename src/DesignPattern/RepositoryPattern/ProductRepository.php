<?php

class ProductRepository implements ProductRepositoryInterface
{

    public function search($name)
    {
        return Product::where('title', 'LIKE', '% ' . $name . '%')
            ->get();
    }

    public function getAllByUser($user_id)
    {
        return Product::where('user_id', '=', $user_id)
            ->get();
    }

    public function getAllByCategory($category_id)
    {
        return Product::where('category_id', '=', $category_id)
            ->get();
    }
}