<?php namespace design_patterns\behavioral\myCommandTryB;

use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\Iterable_;
use SebastianBergmann\FileIterator\Iterator;

class TeamOwnerReceiver {
   protected $teamOwnerPoints = 0;
   function addPoints($amount){
       $this->teamOwnerPoints += $amount;
   }
   function subtractPoints($amount){
       $this->teamOwnerPoints += $amount;
   }
}

class Action {
    public static $ap;
    public static $sp;
}

class Command {
    public $recObject;
    public $amount;
    public function addPoints(){}
    public function subtractPoints(){}
    public $addPointsFunc = 'addPoints';
    public $subtractPointsFunc = 'subtractPoints';
    public $action = array();

    public function __construct(TeamOwnerReceiver $torObject, Array $arObj, Int $pointsAmount) {
        $this->action = $arObj;
        $this->recObject = $torObject;
        $this->amount = $pointsAmount;
    } //end __construct()

    public function call(): void{
        switch ($this->action) {
            case 'addPoints':
                $this->recObject->addPoints($this->amount);
                break;
            case 'subtractPoints':
                $this->recObject->subtractPoints($this->amount);;
                break;
            default: break;
        } //end switch
    }
    public function execute(): void{}
    public function run(): void{}
}

//client code
$too = new TeamOwnerReceiver();
$arrayObj = array('addPoints', 'subtractPoints');
$command = new Command($too, $arrayObj,  233);



