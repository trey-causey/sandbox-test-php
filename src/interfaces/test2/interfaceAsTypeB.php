<?php

interface IWindow {
    public function Open();
}

class SquareWindow implements IWindow {
    public function Open()
    {
        die('opening a square window');
    }
}

class RectangleWindow implements IWindow {
    public function Open()
    {
       die('opening a rectangle window');
    }
}

(new SquareWindow())->Open();