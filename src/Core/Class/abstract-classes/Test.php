<?php

abstract class Car {
    protected $model = ['BMW', 'MERCEDES'];
    abstract public function removeBrand($brandName);
}

class bmw extends Car {
    public function showBrand()
    {
//        var_dump($this->model);
        foreach ($this->model as $model) {
            echo $model.'</br>';
        }
    }

    public function removeBrand($brandName)
    {
//        $newArray = array_filter($this->model, function ($v) {
//            return $v !== "BMW";
//        });
//
//        foreach ($newArray as $model) {
//            echo $model.'</br>';
//        }

        $index = array_search('BMW', $this->model);
        unset($this->model[$index]);
//        var_dump($this->model);
        return $this->model;
    }
}


//(new bmw())->removeBrand('BMW');
//(new bmw())->showBrand();

//$bmw = new bmw();
//$bmw->removeBrand('BMW');
//echo $bmw->showBrand();