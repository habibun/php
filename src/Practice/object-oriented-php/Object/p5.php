<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/5/14
 * Time: 11:18 PM
 */
class Kool{
    public $mvar = 'aMemberVar Member Variable';
    public $aFuncName='Function of member';

    function mfunc(){
        print 'Mfunc is the inside of kool class';
    }
}
$kk = new kool;
echo $kk->mfunc();
?>