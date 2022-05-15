<?php 
namespace BelajarComposer\Data;

class People{
    // public function getName(){
    //     return "Kuzon";
    // }
    public $coba;

    public function __construct(public string $name){

    }

    public function sayHello(string $name): string{
        return "Hello $name my name is $this->name";
    }

}



?>