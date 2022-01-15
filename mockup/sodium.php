<?php
class Sodium{
     static function addForm($id):Sodium{
         return new Sodium;
     }
     function addColumn($columnSize):Sodium{
        return new Sodium;
     }
     function addFilelds(FieldInterface ...$fields):Sodium{
        return new Sodium;
     }
}

class Textfield extends AbstractField{

}
class RadioFiled extends AbstractField{

}
interface FieldInterface{
    static function create():FieldInterface;
    function setId():FieldInterface;
    function setLabel():FieldInterface;
    function setDefault():FieldInterface;
}
class AbstractField implements FieldInterface{
   static function create():FieldInterface{return new AbstractField;}
    function setId():FieldInterface{return new AbstractField;}
    function setLabel():FieldInterface{return new AbstractField;}
    function setDefault():FieldInterface{return new AbstractField;}
}


Sodium::addForm("form")->addFilelds(
    Textfield::create()->setDefault()->setLabel(),
    RadioFiled::create()->setLabel(),
);