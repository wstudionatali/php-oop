<?php
namespace Root\Html;
class Worker 
{
    private $name;
    private $age;
    private $hours;
    use HasRest;
    public function __construct($name){
        $this->name = $name;
    }
    public function work()
    {
       print_r("I`m working");
    }
    public function getName() {
        return $this->name;
    }

}