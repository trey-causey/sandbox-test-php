<?php namespace Laracasts\TestAppDir\libs;

class SomeUtility
{
    public $var;
    public function UseMe($para) {
        $this->var = $para;
    }

    /**
     * @return mixed
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * @param mixed $var
     */
    public function setVar($var): void
    {
        $this->var = $var;
    }

}