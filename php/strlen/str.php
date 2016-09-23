<?php
function mk_dir($dir){

    $dir_arr  = array();//定义一个空数组用来存放路径  可以把它想象成为一个工作单

    while(!is_dir($dir)){ //如果$dir不是目录  那么就表示这个工作还没做 因此就放入工作单里

        array_push($dir_arr,$dir);

        $dir = dirname($dir);//取得上级目录在赋值给$dir

    }

    //上面是把新工作（不是目录的）存入到数组

    while(count($dir_arr)){

        $list = array_pop($dir_arr);

        mkdir($list);

    }

    //通过出栈 来层层创建目录

}

$dir = "./insurance_admin_logs/" . date('Y') . "/" . date('m') . "/";  // 日志根目录

mk_dir($dir);