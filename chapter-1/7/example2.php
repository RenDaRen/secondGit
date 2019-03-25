<?php

$dir = './test';


/**
 * 递归方式显示目录结构
 * @param  $dir 目录       
 * @param  $count 遍历次数
 * @param  &$result 存放树
 * @return $result 返回目录树结构
 */
function loopDir($dir,$count=0,&$result=array())
{
    $count++;
    $handle = opendir($dir);
    // 目录不为空
    while(($file = readdir($handle)) !==  false)
    {
        // 排除掉.和..，目录里面都有隐藏的.和..
        if ($file != '.' && $file != '..')
        {
            echo $file. "\n";

            $newfile['tree'] = str_repeat('&nbsp;',$count).'|-'.$file;
            $newfile['level'] = $count;
            $result[]= $newfile;

            // 如果是目录的话，递归遍历
            if (filetype($dir. '/'. $file) == 'dir')
            {
                loopDir($dir. '/'. $file,$count,$result);
            }
        }
    }
    return $result;
}

$a = loopDir($dir);
foreach ($a as $key2 => $value2) {
    echo '<pre>';
    print_r($value2['tree'].'层级'.$value2['level']);
    echo '</pre>';
}