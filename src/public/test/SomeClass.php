<?php
class SomeClass
{
    private $values = array();

    // 1. privateなコンテナへのアクセサ（getter）
    public function __get($name)
    {
        echo "get: $name<br>";
        if (!isset($this->values[$name])) {
            throw new OutOfBoundsException($name . " not found.");
        }

        return $this->values[$name];
    }

    // 2. privateなコンテナへのアクセサ（setter）
    public function __set($name, $value)
    {
        echo "set: $name setted to $value<br>";
        $this->values[$name] = $value;
    }

    public function __isset($name)
    {
        echo "isset: $name<br>";
        return isset($this->values[$name]);
    }

    public function __unset($name)
    {
        echo "unset: $name<br>";
        unset($this->values[$name]);
    }

    public function __call($name, $args)
    {
        echo "call: $name<br>";

        // あんだーすこあをつけ、メソッド名とする
        $method_name = '_' . $name;
        if (!is_callable(array($this, $method_name))) {
            throw new BadMethodCallException($name . "method not found.");
        }

        return call_user_func_array(array($this, $method_name), $args);
    }

    public static function __callStatic($name, $args)
    {
        echo "callStatic: $name<br>";

        $method_name = '_' . $name;
        if (!is_callable(array('self', $method_name))) {
            throw new BadMethodCallException($name . "method not found.");
        }

        return call_user_func_array(array('self', $method_name), $args);
    }

    private function _bar($value)
    {
        echo "bar called with arg '$value'<br>";
    }

    private static function _staticBar($value)
    {
        echo "staticBar called with arg '$value'<br>";
    }

}

// 呼び出して確認
$obj = new SomeClass();
$obj->foo = 10;
echo "<br><br>";
echo $obj->foo;
echo "<br><br>";
var_dump(isset($obj->foo));
var_dump(empty($obj->foo));
echo "<br><br>";
unset($obj->foo);
var_dump(isset($obj->foo));
echo "<br><br>";
$obj->bar('baz');
SomeClass::staticBar('baz');
echo "<br><br>";
