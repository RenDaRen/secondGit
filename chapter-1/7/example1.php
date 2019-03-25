<?php

// 打开文件
// 将文件的内容读取出来，在开头加入Hello World
// Hello 7891234567890
//确保这个文件对Apache这个用户有读写的权限，4r+2w,chmod 666 hello.txt，最起码确保chmod 446 hello.txt，其让使用者具有读写权限
$file = './hello.txt';
// 只读打开文件
$handle = fopen($file, 'r');

// 读取所有文件，第二个参数为读取的字节数，设置读取这个文件大小的字节，也就是所有的文件
$content = fread($handle, filesize($file));

$content = 'Hello World'.$content;

fclose($handle);

$handle = fopen($file, 'w');

fwrite($handle, $content);

fclose($handle);