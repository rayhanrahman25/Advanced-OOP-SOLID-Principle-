<?php
interface Basestorage{
    function setFileName($fn);
    function writeData($data);
    function mode($mode);
}

class Storage implements Basestorage{
    protected $fn;
    protected $data;
    function __construct($fn, $mode=null){
      $this->setFileName($fn); 
      $this->Mode($mode);
    }
    function setFileName($fn){
       $this->fn = $fn;
    }
    function writeData($data){
     file_put_contents($this->fn, $data, $this->mode);
    }
    function Mode($mode){
        $this->mode = $mode;
    }
}
class StorageManager{
    function ManageData(Basestorage $storage, $data){
     $storage->writeData($data);
    }
}

$file = new Storage("./data/db.txt");
$file->Mode(FILE_APPEND);
$stm = new StorageManager;
$stm->ManageData($file, "Rayhan");


// class StorageManager{
//     function ManageData($fileName, $data){
//        $sto = new Storage($fileName);
//        $sto->writeData($data);
//        return $this;
//     }
// }


// this not For Injection
// $file = new StorageManager;
// $file->ManageData("./data/db.txt", "Hello World");

