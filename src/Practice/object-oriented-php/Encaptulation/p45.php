<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 4:36 PM
 */
class Hide{
    private $myname;
    function getname()
    {
        $this->myname="damodharan";
        return $this->myname;
    }
}
class mimi
{
    private $name='Badsha';
    public function sname()
    {
        echo "I am in hide class";
        return $this->name;
    }
}
$run=new mimi();
echo $run->sname();

$ho =new Hide();
echo $ho->getname();
?>