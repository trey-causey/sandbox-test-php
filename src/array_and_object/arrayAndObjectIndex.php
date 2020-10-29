<?php

class TeamOwnerReceiver {
    protected $TeamOwnerpoints = 0;

    public function addPoint() {
        $this->TeamOwnerpoints =+ 1;
        print_r($this);
    }

}//end TeamOwnerReceiver{}

$arrayObject = [
    'points' => 23,
    'teamowner' => 'dave'
];

foreach ($arrayObject as $item)
{
    echo $item;
}

$teamOwnerObject = new TeamOwnerReceiver();
var_dump($teamOwnerObject);

$teamOwnerObject->addPoint();
var_dump($teamOwnerObject);

