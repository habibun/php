<?php

class WebOutputTypeFactory extends AbstractOutputTypeFactory
{
    public function prettyOutput()
    {
        return new WebPrettyOutput();
    }

    public function uglyOutput()
    {
        return new WebUglyOutput();
    }
}