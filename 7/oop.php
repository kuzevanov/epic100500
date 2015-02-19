<?php

class Car
{

    public $color;

    public $mark;

    public $model;

    public $packaging;

    public function info()
    {
        echo $this->$mark . '<br />';
        echo $this->$model . '<br />';
        echo $this->$packaging . '<br />';
        echo $this->$color . '<br />';
    }

    public function move()
    {
        echo "I'm moving";
    }

    public function becomeBroken()
    {
        echo "booooo";
    }

    public function beebee()
    {
        echo "beeebeee";
    }

}