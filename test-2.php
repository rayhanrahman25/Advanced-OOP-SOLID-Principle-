<?php
//--------------------------------==== Method Chaining ====----------------------------------------------
// class PrintSystem{
//     protected $string;
//     protected $search;
//     protected $replace;

//     function __construct($string){
//         $this->string = $string;
//     }
//     function search($string){
//         $this->search = $string;
//         return $this;
//     }
//     function replace($string){
//         if(!isset($this->search)){
//             throw new Exception("Search Is Not Available");
//         }
//         $this->replace = $string;
//         $this->string = str_replace($this->search, $this->replace, $this->string);
//         return $this;
//     }
//     function uppercase(){
//         $this->string = strtoupper($this->string);
//         return $this;
//     }
//     function print(){
//         echo $this->string;
//     }
// }
// $chaining = new PrintSystem("Hello World");
// $chaining->search("World")->replace("Earth")->uppercase()->print();

//========================----------------- Dependency Injection -------------================================

// interface Display{
//     function displayName();
// }

// class StructureSystem implements Display{
//     protected $name;
//     protected $title;
//     function __construct($name, $title){
//        $this->name = $name;
//        $this->title = $title; 
//     }
//     function displayName(){
//      echo "Hi From {$this->title} {$this->name}"; 
//     }
// }

// class SystemMentor{
//     function Display(Display $mainCalss){
//         $mainCalss->displayName();
//     }
// }
// $structureSystem = new StructureSystem("Rayhan Rahman", "Mr.");
// $mentor = new SystemMentor;
// $mentor->Display($structureSystem);

//========================--------------------------- Another Example With Dependency Injection -------------------===============

// interface BaseSetup{
//     function writeData($data);
//     function Mode($mode);
// }
// class MainSetup  implements BaseSetup{
//     protected $filename;
//     protected $mode;
//     function __construct($filename){
//         $this->filename = $filename;
//     }
//     function writeData($data){
//       file_put_contents($this->filename, $data, $this->mode);
//     }
//     function Mode($mode){
//      $this->mode = $mode;
//     }
// }

// class MainSetupMaintain{
//     function PutToDatabase(BaseSetup $filename, $data){
//         $filename->writeData($data);
//     }
// }

// $old = new MainSetup("./data/db.txt");
// $old->Mode(FILE_APPEND);
// $new = new MainSetupMaintain;
// $new->PutToDatabase($old, "Rayhan Rahman\n");

//======================================= Crate a Dynamic Form ==========================================

class Form{
   static function createId():Form{return new Form;}
    function addColumn():Form{return new Form;}
    function addFields(Mainsetup ...$fields):Form{return new Form;}
}
class textField extends Mainsetup{

}
class radio extends Mainsetup{

}
class upload extends Mainsetup{

}
interface basicSetup{
   static function create():basicSetup;
    function setId():basicSetup;
    function setLabel():basicSetup;
    function setName():basicSetup;
}
class Mainsetup implements basicSetup{
   static function create():basicSetup{
        return new basicSetup;
    }
    function setId():basicSetup{
        return new basicSetup;
    }
    function setLabel():basicSetup{
        return new basicSetup;
    }
    function setName():basicSetup{
        return new basicSetup;
    } 
}

Form::createId("MainForm")->addColumn(2)->addFields(
 textField::create()->setId()->setLabel(),
 radio::create()->setId()->setLabel(),
 upload::create()->setLabel()

);
