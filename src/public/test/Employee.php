<?php
class Employee
{
  public $name;
  public $state = "働いている";

  public function work()
  {
    echo '書類整理';
  }
}

$yamada = new Employee();
$yamada->name = "山田";
echo $yamada->name .  "さんは" . $yamada->state . '<br>';
$yamada->work();
