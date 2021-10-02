<?php

namespace Php\DesignPattern\Behavioral\Specification;

interface Specification
{
    public function isSatisfiedBy(Candidate $candidate) : bool;
}

