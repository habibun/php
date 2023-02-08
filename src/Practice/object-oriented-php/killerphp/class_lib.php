<?php
class person
{
    //When you declare a property with the 'var' keyword, it is considered 'public'.
    var $name;  //when you crate a variables inside a class it is called property.

   /* public $height; //properties declared as 'public' have no access restrictions,meaning anyone can access them.

    protected $social_insurance;    //when a property is declared 'protected',only same class and classes derived from that class can access the property.

    private $pinn_number;   //when you declare a property as 'private',only the same class can access the property.*/

   /*all object can have a special built-in method called a 'constructor'.
    Constructor allow you to initialize your object's properties (translation:give your properties values)
    when you instantiate(create) an object.*/
    function __construct($persons_name) {

        $this->name = $persons_name;
    }
    /*function.txt set_name($new_name) //when you create a function.txt inside a class they are called method.
    {
        $this->name=$new_name;
    }*/

    public function get_name() {

        return $this->name;

    }

    /*private function.txt get_pinn_number()
    {
        return $this->pinn_number;
    }*/
    //protected methods and properties restrict access to those elements.
    protected function set_name($new_name) {

        if (name != "Jimmy Two Guns") {
            $this->name = strtoupper($new_name);
        }

    }
}


// 'extends' is the keyword that enables inheritance
class employee extends person {

    protected function set_name($new_name) {

        if ($new_name == "Stefan Sucks") {
            $this->name = $new_name;
        }
        else if($new_name == "Johnny Fingers") {
            parent::set_name($new_name);
        }

    }
    function __construct($employee_name) {

        $this->set_name($employee_name);
    }
}
?>