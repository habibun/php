<?php

/**
 * Class Singleton
 *
 * Singleton Pattern ensures that a class has only one instance and provides a global point to access it.
 * It ensures that only one object is available all across the application in a controlled state.
 * Singleton pattern provides a way to access its only object which can be accessed directly without the need to instantiate the object of the class.
 */
class Singleton
{
    /**
     * @var string
     */
    private static $instance = null;

    /**
     * @var string
     */
    private $name;

    /**
     * Singleton constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param $name
     * @return Singleton
     */
    public static function getInstance($name): Singleton
    {
        if (!self::$instance) {
            self::$instance = new static($name);
        }

        return self::$instance;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

$s1 = Singleton::getInstance('instance one');
$s2 = Singleton::getInstance('instance two');
if ($s1 === $s2) {

    var_dump($s1->getName());
    echo '</br>';
    var_dump($s1->getName());
    echo '</br>';

    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}