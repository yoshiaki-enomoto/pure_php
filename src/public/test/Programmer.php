<?php
// 同階層に作成したらfatal errorになるので、一旦コメントアウト

// エラーの理由は、require_onceがないから。当たり前。。。
require_once 'Employee.php';

class Programmer extends Employee
{
  public $salary = 5;

  public function __toString()
  {
    return "滋賀で<br>" . $this->work();
  }

  public function work()
  {
    echo 'プログラムを書いてます' . '<br>';
  }

  // Fatal error: Cannot override final method Employee::getSalary() になる
  // メソッドのオーバーライドはできない
  // public function getSalary()
  // {
  //   return $this->salary * 100;
  // }
}

// 下記を書くことでL2のコメント解消になるかと思ったが、php8では削除機能
// function __autoload($name)
// {
//     $filename = $name . '.php';
//     if (is_readable($filename)) {
//         require $filename;
//     }
// }

echo "<br>";
echo "【西川のターン】<br>";

$nishikawa = new Programmer("西川", Programmer::REGULAR);
echo $nishikawa;
  // オブジェクトをechoした時の挙動確認
  // なぜ、文字列とメソッドが逆転して表示されるか、分からない
echo $nishikawa->getName() . "<br>";
$nishikawa->work();
echo $nishikawa->getSalary();
