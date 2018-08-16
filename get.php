<?php
$arr[0]["url"] = "http://www.baidu.com";
$arr[0]["title"] = "幸福";
$arr[0]["content"]="能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？";
$arr[0]["id"] = "0";
$arr[0]["logo"] = "images/shuijiao.jpg";

$arr[1]["url"] = "http://www.baidu.com";
$arr[1]["title"] = "木屋";
$arr[1]["content"]="想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.";
$arr[1]["id"] = "1";
$arr[1]["logo"] = "images/muwu.jpg";

$arr[2]["url"] = "http://www.baidu.com";
$arr[2]["title"] = "CBD";
$arr[2]["content"]="烤炉模式的城，到黄昏，如同打翻的调色盘一般.";
$arr[2]["id"] = "2";
$arr[2]["logo"] = "images/cbd.jpg";

$arr[3]["url"] = "http://www.baidu.com";
$arr[3]["title"] = "远眺";
$arr[3]["content"]="静静的看这个世界，最后终于疯了.";
$arr[3]["id"] = "3";
$arr[3]["logo"] = "images/yuantiao.jpg";

$arr[4]["url"] = "http://www.baidu.com";
$arr[4]["title"] = "幸福";
$arr[4]["content"]="能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？";
$arr[4]["id"] = "0";
$arr[4]["logo"] = "images/shuijiao.jpg";

$arr[5]["url"] = "http://www.baidu.com";
$arr[5]["title"] = "木屋";
$arr[5]["content"]="想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.";
$arr[5]["id"] = "1";
$arr[5]["logo"] = "images/muwu.jpg";

$arr[6]["url"] = "http://www.baidu.com";
$arr[6]["title"] = "CBD";
$arr[6]["content"]="烤炉模式的城，到黄昏，如同打翻的调色盘一般.";
$arr[6]["id"] = "2";
$arr[6]["logo"] = "images/cbd.jpg";
$arr[7]["url"] = "http://www.baidu.com";
$arr[7]["title"] = "远眺";
$arr[7]["content"]="静静的看这个世界，最后终于疯了.";
$arr[7]["id"] = "3";
$arr[7]["logo"] = "images/yuantiao.jpg";

$arr[8]["url"] = "http://www.baidu.com";
$arr[8]["title"] = "幸福";
$arr[8]["content"]="能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？";
$arr[8]["id"] = "0";
$arr[8]["logo"] = "images/shuijiao.jpg";

$arr[9]["url"] = "http://www.baidu.com";
$arr[9]["title"] = "木屋";
$arr[9]["content"]="想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.";
$arr[9]["id"] = "1";
$arr[9]["logo"] = "images/muwu.jpg";

$arr[10]["url"] = "http://www.baidu.com";
$arr[10]["title"] = "CBD";
$arr[10]["content"]="烤炉模式的城，到黄昏，如同打翻的调色盘一般.";
$arr[10]["id"] = "2";
$arr[10]["logo"] = "images/cbd.jpg";
//
//$arr[11]["url"] = "http://www.baidu.com";
//$arr[11]["title"] = "远眺";
//$arr[11]["content"]="静静的看这个世界，最后终于疯了.";
//$arr[11]["id"] = "3";
//$arr[11]["logo"] = "images/yuantiao.jpg";
$list=$arr;

$str["msg"]="获取数据成功";
$str["code"]="ok";
$str["list"]=$list;
$str["totalPage"]=2;

echo json_encode($str,JSON_UNESCAPED_UNICODE);
?>