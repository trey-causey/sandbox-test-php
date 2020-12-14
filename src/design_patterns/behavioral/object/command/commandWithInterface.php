<?php
namespace design_patterns\behavioral\commandWithInterface;
use phpDocumentor\Reflection\Types\This;

interface ICommand {
    public function Execute();
} //end ICommand{}

class AddPointsCommand implements ICommand {
    private $teamOwnObj;

    public function __construct(TeamOwner $to ) {
    $this->teamOwnObj = $to;
    } //end __construct()

    public function Execute()
    {
        // TODO: Implement Execute() method.
        $this->teamOwnObj->addPoints();
    }
} //end AddPoints{}

class showPoints implements ICommand {
    private $teamOwnerObj;
    public function __construct(TeamOwner $to) {
        $this->teamOwnerObj = $to;
    }
    public function Execute()
    {
        // TODO: Implement Execute() method.
        var_dump($this->teamOwnerObj);
    }
}

class Invoker {
    /**
     * @var ICommand
     */
    private $onStartCommand;
    private $onFinishCommand;

    public function setOnStartCommand(ICommand $cmd)
    {
        $this->onStartCommand = $cmd;
    }
    public function setOnFinishCommand(ICommand $cmd)
    {
        $this->onFinishCommand = $cmd;
    }

    public function doSomething()
    {
        if($this->onStartCommand instanceof ICommand)
        {
            $this->onStartCommand->Execute();
        }
        if($this->onFinishCommand instanceof ICommand)
        {
            $this->onFinishCommand->Execute();
        }
    }
}

class Receiver {

}

class TeamOwner {
    public $draftInfo = array();
    public $teamOwnerPoints;

    /**
     * TeamOwner constructor.
     * @param array $draftInfo
     * @param $teamOwnerPoints
     */
    public function __construct(array $draftInfo, $teamOwnerPoints)
    {
        $this->draftInfo = $draftInfo;
        $this->teamOwnerPoints = $teamOwnerPoints;
    }
    public function addPoints()
    {
        $workingObject = $this->draftInfo;
        foreach ($workingObject as $item)
        {
            if ($item == 'VET')
            {
                $this->teamOwnerPoints += 5;
            }
        }
    }
    public function subtractPoints()
    {

    }
}

//client code
$driverDraft = array('VET', 'GAS', 'KVY');
$clientTeamOwner = new TeamOwner($driverDraft, 0);
$buttonPush = new Invoker();
$buttonPush->setOnStartCommand(new AddPointsCommand($clientTeamOwner));
$buttonPush->setOnFinishCommand(new showPoints($clientTeamOwner));
$buttonPush->doSomething();

$menuItem = new Invoker();
$menuItem->setOnStartCommand(new AddPointsCommand($clientTeamOwner));
$menuItem->setOnFinishCommand(new showPoints($clientTeamOwner));
$menuItem->doSomething();