<?php
class Employee
{
  // public $name;
  private $name;
  private $type;
  public $salary = 20;
  // public $state = "働いている";
  private $state = "働いている";
  // public static $company = "ポニーキャニオン";
  private static $company = "ポニーキャニオン";

  const PARTTIME = "0X01";  //アルバイト
  const REGULAR  = "0X02";  //正社員
  const CONTRACT = "0X03";  //契約社員

  public function __construct(string $name, string $type)
  {
    var_dump('this', $this);
    $this->name = $name;
    $this->type = $type;

  }

  public function getName()
  {
    return $this->name;
  }

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

  public final function getSalary()
  {
    return $this->salary;
  }
}


echo "<br>";
echo "【yamadaのターン】<br>";

// $yamada = new Employee();
// $yamada->name = "山田";
$yamada = new Employee("山田", Employee::REGULAR);
// echo $yamada->name .  "さんは" . $yamada->state . '<br>';
// echo $yamada->name .  "さんは" . $yamada->getState() . '<br>';
echo $yamada->getName() .  "さんは" . $yamada->getState() . '<br>';
$yamada->setState("寝ている");
// echo $yamada->name .  "さんは" . $yamada->getState() . '<br>';
echo $yamada->getName() .  "さんは" . $yamada->getState() . '<br>';
$yamada->work();
// echo Employee::$company;
echo Employee::getCompany() . "<br>";
// $yamada->setCompany('エイベックス');
Employee::setCompany('エイベックス');
echo Employee::getCompany() . "<br>";
// echo Employee::REGULAR;
echo $yamada->getSalary();
