<?php


interface BaseStudent{
    function DisplayName();
}
class Student implements BaseStudent{
     protected $name;
     function __construct($name){
       $this->name = $name;  
     }
    function DisplayName(){
        echo "Hello From ".$this->name;
    }
}
class Improvement implements BaseStudent{
    protected $name;
    protected $title;
     function __construct($name, $title){
       $this->name = $name;  
       $this->title = $title;
     }
    function DisplayName(){
        echo "Hello From {$this->title} {$this->name}";
    }
}
// class StudentManagement{
//     function intorduceStudent($name){
//         $sudent = new Student($name);
//         $sudent->DisplayName($name);
//     }
// }
class StudentManagement{
    function intorduceStudent($student){
       $student->DisplayName();
    }
}
$student = new Student("Rayhan Rahman");
$stim = new Improvement("Rayhan Rahman","Mr.");
$stuManageMent = new StudentManagement;
$stuManageMent->intorduceStudent($stim);