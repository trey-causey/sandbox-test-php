<?php
//seed yard based on seed type

//Strategy Interface
interface SeedOptions {
    function spreadSeed($seedType);
}
//concrete Strategy
class SeedWithFescue implements SeedOptions {
    function spreadSeed($seedType)
    {
        echo "\nSpread " . $seedType . " around the yard";
    }
}
//concrete Strategy
class SeedWithBermuda implements SeedOptions {
    function spreadSeed($seedType)
    {
        echo "\nSpread " . $seedType . " around the yard";
    }
}
//context
class GrowGrass {
    private $seedOption;
    /**
     * @param SeedOptions $seedOption
     */
    public function setGrowGrass(SeedOptions $seedOption) {
        $this->seedOption = $seedOption;
    }

    public function spreadSeed($seedType) {
        $this->seedOption->spreadSeed($seedType);
    }
}

//client code
$growGrass = new GrowGrass();
$growGrass->setGrowGrass(new SeedWithFescue());
$growGrass->spreadSeed("Fescue");

$growGrass = new GrowGrass();
$growGrass->setGrowGrass(new SeedWithBermuda());
$growGrass->spreadSeed("Bermuda");
