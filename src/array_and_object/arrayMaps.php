<?php namespace Causey\ArrayAndObject;

class Test
{
    protected $items;

    /**
     * Test constructor.
     * @param $items
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        array_map(function ($item) use ($key) {
            return $item->$key;
        }, $this->items);
    }
}