<?php

class Person {
  public $name;
  public $age;

  function __construct(){
    $this->name = "John";
    $this->age = 28;
  }

  function getName (){
    echo "This persons name is: $this->name.";
  }

  function getAge() {
    echo "$this->name has $this->age years.";
  }

}

$person = new Person ();
echo $person->getName()."<br>";
echo $person->getAge()."<br>";
echo "<br>";
var_dump($person->getName());
var_dump($person->getAge());