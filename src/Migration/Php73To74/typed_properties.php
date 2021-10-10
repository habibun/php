<?php
namespace Php\Migration\Php73To74;

class TypedProperties {
    public int $id;
    public string $name;

    /**
     * TypedProperties constructor.
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

$tp = new TypedProperties(2, 'test');
var_dump($tp->getName());
var_dump($tp->getId());
