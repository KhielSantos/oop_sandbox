<?php

class User
{

  public $name;
  public $age;

  public function __construct ($name, $age)
  {

    $this->name = $name;
    $this->age = $age;

  }

  public function sayHello ()
  {

    return $this->name.' Says Hello';

  }

  public function __destruct ()
  {

    echo 'Destructor ran...';

  }

}

$user1 = new User('Khiel', 38);

echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayHello();
echo '<br>';

$user2 = new User('Paty', 35);

echo $user2->name . ' is ' . $user2->age . ' years old';
echo '<br>';
echo $user2->sayHello();
echo '<br>';