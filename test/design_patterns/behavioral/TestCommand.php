<?php

namespace design_patterns\behavioral\command\tests;

use design_patterns\behavioral\command\concreteCommandA;
use design_patterns\behavioral\command\Invoker;
use design_patterns\behavioral\command\Receiver;
use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\command;

class TestCommand extends TestCase
{
    public function TestInvocation()
    {
    $testInvokerObject = new Invoker();
    $testReceiverObject = new Receiver();
    $testInvokerObject->setCommand(new concreteCommandA($testReceiverObject));
    $testInvokerObject->run();


    }

}
