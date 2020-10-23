<?php

namespace interfaces\test;

use phpDocumentor\Reflection\Types\Float_;

interface person {
    public function speak($words);
}

interface factory {

}

abstract class speaker {
    function setDiameter($diameter) {
    }
}

class teacher implements person {
    public function speak($words)
    {
        echo $words;
    }
}

class driver implements person {
    public function speak($words)
    {
        echo $words;
    }
}

class juniorDriver extends driver {

}

class seniorDriver extends driver {

}

class tweeter extends speaker {
}

class woofer extends speaker {

}
$vettel = new driver();
$vettel->speak("\nleave me alone, Binotti");
$leclerk = new juniorDriver();
$leclerk->speak("\n please move VET");
$abc = new teacher();
$abc->speak("\ndo my homework");
$highs = new tweeter();
$highs->setDiameter(2.0);