<?php

 abstract class Bird{
   abstract function eat();
   abstract function sleep();
}
class FlyingBird extends Bird{
    function eat(){
        
    }
    function Sleep(){

    }
    function Fly(){

    }
}
class WalkingBird extends Bird{
    function eat(){
        
    }
    function Sleep(){

    }
    function Walk(){

    }
}

class MaintainBird{
    function BirdCommonBehave(Bird $b){
        $b->eat();
        $b->sleep();
    }
    function Fly(FlyingBird $fb){
        $fb->fly();
    }
    function Walk(WalkingBird $wb){
       $wb->Walk();
    }
}
class Eagle extends FlyingBird{

}
class Penguin extends WalkingBird{

}
