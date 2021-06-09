<?php

class DataOutputTypeFactory extends AbstractOutputTypeFactory
{
    public function prettyOutput()
    {
        return new DataPrettyOutput();
    }

    public function uglyOutput()
    {
        return new DataUglyOutput();
    }
}