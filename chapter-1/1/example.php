<?php

/**
 * 写出如下程序的输出结果
 * <?php
 *
 * $data = ['a', 'b', 'c'];
 *
 * foreach($data as $key => $val)
 * {
 *      $val = &$data[$key];
 * }
 * 程序运行时，每一次循环结束后变量$data的值是什么？请解释
 * 程序执行完成后，变量$data的值是什么？请解释

	解题：
	第一次循环：
	$key =  0;
	$val =  'a';
	$val = &$data[$key];  即$val=&$data[0];  
	此时$data = ['a', 'b', 'c'];
	第二次循环
	$key =  1;
	$val =  b；即b=&data[0]；此时$data[0]=b;因为第一次循环中$val =  &$data[0]，$val引用$data[0]的值，两者共享一个内存空间，当修改其中任意一个变量的值的时候，内存空间发生更改，两个变量的 值都会发生更改。
	$val = &$data[$key]; 即$val =  &data[1]；
	此时$data = ['b', 'b', 'c'];
	第三次循环
	$key =  2;
	$val =  c；即c=&data[1]；此时$data[1]  =  c;
	此时$data = ['b', 'c', 'c'];
	循环结束
	PHP有函数作用域，但是没有块级作用域，条件语句和循环中的变量对外部可见，而且内外部可以相互改变。PHP没有C/C++、java等语言的块级作用域概念
	所以最后的结果就是最后一次循环的结果：$data = ['b', 'c', 'c'];

*/

$data = ['a', 'b', 'c'];

foreach ($data as $key=>$val)
{
    $data[0] = 1;
}

var_dump($data);



