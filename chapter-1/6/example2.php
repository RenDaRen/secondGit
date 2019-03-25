<?php 
// 请匹配所有img标签中的src的值
$str = '<img alt="高清" id="button" src="av.jpg" /><img alt="高清" id="button" src="av1.jpg" />';
$pattern = '/<img.*src="(.*?)".*?\/?>/i';
//匹配一个img，当？紧跟在任何一个其他限制符后面是，匹配模式是非贪婪的，尽可能匹配少的，一个就行
$pattern2 = '/<img.*?src="(.*?)".*?\/?>/i';
$a=preg_replace($pattern, '\\0', $str);
var_dump($a);

