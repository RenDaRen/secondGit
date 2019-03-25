<?php
/**
 * 注意：短路效果，如果||前面的成立，||后面的优先级高也不会执行
 >优先级高于||高于=，
 先计算前一个3>0，为true，或逻辑运算成立，返回true，||后面的不执行了。所以此时$a为true，$b为默认设置的0
 递增不影响布尔值，true++仍为true。
 int 0++为1.
 */
$a = 0;
$b = 0;
if ($a = 3 > 0 || $b = 3>0) 
{
	
	    var_dump($a);//boolean true
	
	
	    var_dump($b);//int 0
	
    $a++;
    $b++;
    
	    var_dump($a);//boolean true
	
	
	    var_dump($b);//int 1
	
}

// 把上面的if改为：
// if ($a = 3 < 0 || $b = 3>0) 
// $a $b 前后四个值都为 ：boolean true
// 先计算前一个3<0,不成立为false，然后执行||后面的：3>0，成立，为true，此时$b = true;
// 此时程序为：false||$b=true，应该执行fasle||$b，但是$b没定义，所以会找到$b的值，false||true，成立，结果为true，将结果返回给$a,
// 所以$a=true;$b=true;递增不影响布尔型，所以结果都是true