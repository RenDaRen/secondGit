<?php

$var1 = 5;
$var2 = 10;
function foo(&$my_var)
{
    global $var1;
    $var1 += 2;
    $var2 = 4;
    $my_var += 3;
    return $var2;
}
$my_var = 5;
echo foo($my_var). "\n";//4，$var2是函数内的局部变量，最为返回值，所以为4
echo $my_var. "\n";//8，my_var作为引用参数传递给函数，函数内部对其修改+3，影响外部的值，所以为8
echo $var1;//7，函数内使用global申明的变量是全局变量，所以函数内对其修改影响外部的值，所以为7
echo $var2;//10，var2是函数内的局部变量，函数内修改不影响函数外部的值，仍为10
$bar = 'foo';
$my_var = 10;
echo $bar($my_var). "\n";//4，变量名后面跟着括号的为可变函数，再次调用函数，函数的返回值仍是局部变量var2,值仍为4
