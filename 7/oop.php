<?php

class Car
{

    public $color = 'Green';

    public $mark = 'Honda';

    public $model;

    public $packaging;

    public function information()
    {
        echo $this->mark . '<br />';
        echo $this->model . '<br />';
        echo $this->packaging . '<br />';
        echo $this->color . '<br />';
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

$kia = new Car();
var_dump($kia);
$kia->mark = 'KIA';
$kia->model = 'Ceed';
$kia->packaging = '1234qwer';
$kia->color = 'Red';
var_dump($kia);

$kia->color = 'Orange';
var_dump($kia);

$kia->information();
$kia->move();







