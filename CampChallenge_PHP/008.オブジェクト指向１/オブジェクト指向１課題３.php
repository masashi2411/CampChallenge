<?php


class User{

  public $name1;
  public $name2;

  public function __construct($name1,$name2){
    $this->name1 = $name1;
    $this->name2 = $name2;
  }

  public function sayHi(){
    echo "hi $this->name1,I am $this->name2!";
  }
}


  $araibaba = new User("荒井","馬場");
  $araibaba->sayHi();
