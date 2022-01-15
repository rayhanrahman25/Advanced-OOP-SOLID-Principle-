<?php
// ---------------- open integration and close modification -----------------------
// bad practice -------
class FileDisplay{
      function Display($file, $filetype){
           if("mp4" == $filetype){
               $file;
           }
           if("mp3" == $filetype){
               $file;
           }
      }
}

class FileDisplay2{
    function Display(Interfacefile  $file){
        $file->display();
    }
}
interface Interfacefile{
     function display();
}
class Imgfile implements Interfacefile{
    function display(){
     //display img   
    }
}
class Mp4file implements Interfacefile{
    function display(){
     //display img   
    }
}
class Mp3file implements Interfacefile{
    function display(){
     //display img   
    }
}
$img = new Imgfile("Img File");
$mp4 = new Mp4file("Mp4 File");
$mp3 = new Mp3file("Mp3 File");

$display = new FileDisplay2;
$display->display($img);
$display->display($mp4);
$display->display($mp3);