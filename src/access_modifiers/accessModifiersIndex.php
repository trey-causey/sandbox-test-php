<?php

class PriTest {
    private $privar = "Pri";
}
class ProTest {
    protected $provar = "Pro";
}
class PubTest {
    public $pubvar = "Pub";
}
$priobj = new PriTest();
//var_dump($priobj->privar);
$proobj = new ProTest();
//var_dump($proobj->provar);
$pubobj = new PubTest();
var_dump($pubobj->pubvar);

class PriExt extends PriTest {
    function TryModPri() {
//        var_dump($this->privar);
    }
}
class ProExt extends ProTest {
    function TryModPro() {
        var_dump($this->provar);
    }
}
class PubExt extends PubTest {
    function TryModPub() {
        var_dump($this->pubvar);
    }
}
$priExtObj = new PriExt();
$priExtObj->TryModPri();
$proExtObj = new ProExt();
$proExtObj->TryModPro();




