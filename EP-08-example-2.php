<?php
abstract class Shape{
    abstract function firstHeight();
    abstract function SecondHeight();
}
class ShapeTriangle extends Shape{
    function firstHeight(){

    }
    function SecondHeight(){

    }
    function ThirdHeight(){

    }
}
class ShapeSquare extends ShapeTriangle{
    function firstHeight(){

    }
    function SecondHeight(){

    }
    function ThirdHeight(){

    }
    function FourthHeight(){

    }
}

class Triangle extends ShapeTriangle{

}
class Square extends ShapeSquare{

}

class Geometry{
     function YtypeShape(Shape $shape){
       $shape->firstHeight();
       $shape->SecondHeight();
     }
     function TypeShpae(ShapeTriangle $shape){
       $shape->ThirdHeight();
     }
     function SqauareShape(ShapeSquare $shape){
         $shape->FourthHeight();
     }
}