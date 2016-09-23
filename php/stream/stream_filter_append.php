<?php
$fp = fopen("./test.txt", "w+");
//exit();
// 把 rotl3过滤器作用在写入流上
stream_filter_append($fp, "string.rot13", STREAM_FILTER_READ);

// 写入的数据经过rot13过滤器的处理
fwrite($fp, "This is a test\n");

rewind($fp);
// 读取写入的数据
fpassthru($fp);
fclose($fp);