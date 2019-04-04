<?php

class User
{
  
  private $name;
  private $age;

  public function __construct ($name, $age)
  {

    $this->name = $name;
    $this->age = $age;

  }

  public function getName ()
  {

    return $this->name;

  }

  public function setName ($name)
  {

    $this->name = $name;

  }

  public function __get ($property)
  {

    if (property_exists($this, $property)) {

      return $this->$property;

    }

  }

  public function __set ($property, $value)
  {

    if (property_exists($this, $property)) {

      $this->$property = $value;

    }

    return $this;

  }

}

$user1 = new User('Khiel', 38);

$user1->__get('age', 39);
echo $user->__get('age');