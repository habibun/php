<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/22/16
 * Time: 8:52 PM
 */
trait Php{
    public function phpCoder()
    {
      return "I love php<br>";
    }
}

trait Java {
    public function javaCoder()
    {
        return "I love java<br>";
    }
}

/*class CoderPhp{
    use Php;
}*/

/*class CoderJava{
     use Java;
}*/

class PhpAndJavaCoder{
    use Php, Java;
}



//$cp = new CoderPhp();
//echo $cp->phpCoder();
//
//$cj = new CoderJava();
//echo $cj->javaCoder();


$pajc = new PhpAndJavaCoder();
echo $pajc->phpCoder();
echo $pajc->javaCoder();
