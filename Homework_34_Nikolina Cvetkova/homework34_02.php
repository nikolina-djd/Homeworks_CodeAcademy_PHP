<?php

class Person {
  public $name;
  public $age;
  public $job;

  function __construct($name, $age, $job) {
    $this->name = $name;
    $this->age = $age;
    $this->job = $job;
  }

  function newJob($newJob){
    $this->job = $newJob;
  }
  function happyBirthday(){
    $this->age = ++$this->age;
  }
}

  $person1 = new Person ("Tom", 34, "Button-Pusher");
  $person2 = new Person ("John", 41, "Lever-Puller");

  echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
  echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

  $person1->newJob("Box-Mover");
  $person1->happyBirthday();
  $person2->happyBirthday();
  echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
  echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";