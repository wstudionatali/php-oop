<?php 
namespace Root\Html;
trait HasRest
{
    public function rest() {
        print ($this->getName(). ' has rest');
    }
}