<?php

interface ProductRepositoryInterface
{
    public function search($name);

    public function getAllByUser($user_id);

    public function getAllByCategory($category_id);
}