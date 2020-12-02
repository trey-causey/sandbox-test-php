<?php

namespace design_patterns\behavioral\command;
//transaction
//encapsulate a request into an object
//the request is to take a current score (number of points) and increment it by a certain amount
//take starting points
$points = 0;

abstract class AbClassCommand {
    //this class declares an interface for executing operations
    //concrete ACommand subclasses specifyt a receiver-action pair by storing the receiver as an isntance variable
    //  and by by implementing Execute to invoke the request
    function Execute() {
        echo "\nthis is the execute function from the ACommand abstract class ";
        //replace this...this is a "simplest form" operation
    } //end Execute()
}//end ACommand{}

class concreteCommandA extends AbClassCommand {
    private $requestReceiverObject;
    public function Execute()
    {
        echo "\nthis is the execute function from the cc subclass ";
        //parent::Execute(); // TODO: Change the autogenerated stub

    }
    public function
    __construct(Receiver $rObject)
    {
        $this->requestReceiverObject = $rObject;
    }
}//end concreteCommand{}
class concreteCommandB extends AbClassCommand {
    private $requestReceiverObject;
    public function Execute()
    {
        echo "\nthis is the execute function from the cc subclass ";
        parent::Execute(); // TODO: Change the autogenerated stub

    }
    public function __construct(Receiver $rObject)
    {
        $this->requestReceiverObject = $rObject;
    }
}//end concreteCommand{}

class Receiver {
    protected $points;
}//end Receiver{}

class Invoker {
    private $commandObject;

    public function setCommand(AbClassCommand $cmd)
    {
        $this->commandObject = $cmd;
    }
    public function run() {
        $this->commandObject->Execute();
    }
}//end Invoker{}

//client code
echo "\nthis is the client code";
$clientInvokerObject = new Invoker();
$clientReceiverObject = new Receiver();
$clientInvokerObject->setCommand(new concreteCommandA($clientReceiverObject));
$clientInvokerObject->run();
