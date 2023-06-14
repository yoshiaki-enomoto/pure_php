<?php
class Employee
{
  public $name;
  // public $state = "働いている";
  private $state = "働いている";
  // public static $company = "ポニーキャニオン";
  private static $company = "ポニーキャニオン";

  const PARTTIME = "0X01";  //アルバイト
  const REGULAR  = "0X02";  //正社員
  const CONTRACT = "0X03";  //契約社員

  public static function getCompany()
  {
    return self::$company;
  }

  public static function setCompany($value)
  {
    self::$company = $value;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState(string $state)
  {
    $this->state = $state;
  }

  public function work()
  {
    echo '書類整理' . '<br>';
  }
}

$yamada = new Employee();
$yamada->name = "山田";
// echo $yamada->name .  "さんは" . $yamada->state . '<br>';
echo $yamada->name .  "さんは" . $yamada->getState() . '<br>';
$yamada->setState("寝ている");
echo $yamada->name .  "さんは" . $yamada->getState() . '<br>';
$yamada->work();
// echo Employee::$company;
echo Employee::getCompany() . "<br>";
// $yamada->setCompany('エイベックス');
Employee::setCompany('エイベックス');
echo Employee::getCompany() . "<br>";
echo Employee::REGULAR;
