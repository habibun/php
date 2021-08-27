<?php

// this is used to create web outputs
$webFactory = new WebOutputTypeFactory();

$webPretty = $webFactory->prettyOutput();
echo $webPretty->getPrettyOutput(); // Imagine you had some really pretty web output here

$webUgly = $webFactory->uglyOutput();
echo $webUgly->getUglyOutput(); // Imagine you had some really ugly web output here

// this is used to create data outputs
$dataFactory = new DataOutputTypeFactory();

$dataPretty = $dataFactory->prettyOutput();
echo $dataPretty->getPrettyOutput(); // { 'text': 'Imagine you had some really pretty data output here' }

$dataUgly = $dataFactory->uglyOutput();
echo $dataUgly->getUglyOutput(); // Imagine, you, had, some, really, ugly, CSV, output, here