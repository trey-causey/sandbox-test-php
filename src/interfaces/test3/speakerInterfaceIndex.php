<?php

interface ISpeaker {
    public function speak();
}

abstract class Speaker implements ISpeaker {

}

class EnglishSpeaker extends Speaker {
    public function speak()
    {
        // TODO: Implement speak() method.
    }
}
class GermanSpeaker extends Speaker {
    public function speak()
    {
        // TODO: Implement speak() method.
    }
}
class SpanishSpeaker extends Speaker {
    public function speak()
    {
        // TODO: Implement speak() method.
    }
}

class SpeakerFactory {
    public function createSpeaker(ISpeaker $sp)
    {
        return new $sp;
    }
}

$sf = new SpeakerFactory();
$speaker = $sf->createSpeaker(new SpanishSpeaker());

$speaker->speak();

