<?php

// 对象本身就是引用传递
class Person
{
    public $name = "zhangsan";
}

$p1 = new Person;
xdebug_debug_zval('p1');//指向p1的zval容器的引用次数"refcount"为1

$p2 = $p1;
xdebug_debug_zval('p1');//指向p1的zval容器的引用次数"refcount"为2，此时p2也指向这个zval容器

$p2->name = "lisi";
xdebug_debug_zval('p1');//指向p1的zval容器的引用次数"refcount"为1，普通方式赋值的时候，发生了写时拷贝，会给$p2重新开辟一块内存空间，但是对象的调用以及赋值，默认是通过引用的方式，