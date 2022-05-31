<?php

abstract class AbstractOutputTypeFactory
{
    abstract public function prettyOutput();

    abstract public function uglyOutput();
}