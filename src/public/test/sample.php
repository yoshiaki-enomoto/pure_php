<?php

$number = rand();
define("YUI", "cherry");
const AI = "君が笑えば";
$value = "YUI";
// $mysql = mysql_connect('server', 'username', 'password');
// var_dump("var_dump", get_resource_type($mysql));

echo('<pre>');
var_dump(get_defined_functions());
echo('</pre>');

if ($number % 2 == 0) {
    echo $number . "は偶数です"."<br>";
} else {
    echo $number . "は奇数です"."<br>";
}

echo('<pre>');
print_r($GLOBALS);
  // 全てのグローバル変数への参照を持つ連想配列
  // $numberへの参照も可能
print_r('$number：' . $GLOBALS['number']);
print_r('$_SERVER' . $_SERVER);
print_r('$_GET' . $_GET);
print_r('$_POST' . $_POST);
print_r('$_FILES' . $_FILES);
print_r('$_COOKIE' . $_COOKIE);
print_r('$_SESSION' . $_SESSION);
print_r('$_REQUEST' . $_REQUEST);
print_r('$_ENV' . $_ENV);
echo('</pre>');

echo YUI . "<br>";
echo AI . "<br>";
echo constant($value) . "<br>";

?>
あいこ
miwa
yui

