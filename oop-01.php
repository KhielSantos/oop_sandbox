<?php

#define uma classe
class User
{
  #propriedades(atributos)
  public $name;

  #metodos(funcoes)
  public function sayHello ()
  {

    return $this->name.' Says Hello';

  }

}

#instanciar o objeto usuario da classe user
$user1 = new User();

$user1->name = 'Khiel';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();
echo '<br>';

#cria novo usuario
$user2 = new User();

$user2->name = 'Paty';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();
echo '<br>';