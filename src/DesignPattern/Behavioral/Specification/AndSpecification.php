<?php

namespace Php\DesignPattern\Behavioral\Specification;

class AndSpecification implements Specification {

    private array $specifications;

    public function __construct(Specification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(Candidate $candidate): bool
    {
        foreach ($this->specifications as $specification) {
            if (! $specification->isSatisfiedBy($candidate)) {
                return false;
            }
        }

        return true;
    }
}
