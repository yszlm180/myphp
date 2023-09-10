<?php
error_reporting(0);
$id = isset($_GET['id'])?$_GET['id']:'cctv1';
$n = [
   'cctv1' => 376, //CCTV1综合
   'cctv1hd' => 336, //CCTV1综合HD
   'cctv2' => 377, //CCTV2财*
   'cctv2hd' => 337, //CCTV2财*HD
   'cctv3' => 378, //CCTV3综艺
   'cctv3hd' => 338, //CCTV3综艺HD
   'cctv4' => 379, //CCTV4中文国际
   'cctv4hd' => 339, //CCTV4中文国际HD
   'cctv5' => 380, //CCTV5体育
   'cctv5hd' => 340, //CCTV5体育HD
   'cctv5p' => 341, //CCTV5+体育赛事HD
   'cctv6' => 381, //CCTV6电影
   'cctv6hd' => 342, //CCTV6电影HD
   'cctv7' => 382, //CCTV7军事农业
   'cctv7hd' => 343, //CCTV7军事农业HD
   'cctv8' => 383, //CCTV8电视剧
   'cctv8hd' => 344, //CCTV8电视剧HD
   'cctv9' => 384, //CCTV9纪录
   'cctv9hd' => 345, //CCTV9纪录HD
   'cctv10' => 385, //CCTV10科教
   'cctv10hd' => 346, //CCTV10科教HD
   'cctv11' => 386, //CCTV11戏曲
   'cctv12' => 387, //CCTV12社会与法
   'cctv12hd' => 347, //CCTV12社会与法HD
   'cctv13' => 388, //CCTV13新闻
   'cctv14' => 389, //CCTV14少儿
   'cctv14hd' => 348, //CCTV14少儿HD
   'cctv15' => 390, //CCTV15音乐
   'dyjc' => 392, //CCTV-第一剧场x
   'fyjc' => 394, //CCTV-风云剧场x
   'fyyy' => 395, //CCTV-风云音乐x
   'fyzq' => 396, //CCTV-风云足球x
   'gfjs' => 397, //CCTV-国防军事x
   'hjjc' => 398, //CCTV-怀旧剧场x
   'sjdl' => 393, //CCTV-世界地理x
   'cgtn' => 391, //CGTN
   'cgtnhd' => 349, //CGTNHD x
   'cetv1' => 442, //中国教育-1
   'cetv3' => 443, //中国教育-3
   'cetv4' => 444, //中国教育-4
   'chcgq' => 350, //CHC高清电影
   'chcdz' => 445, //CHC动作电影
   'chcjt' => 446, //CHC家庭影院
   'bjws' => 399, //北京卫视
   'bjhd' => 351, //北京卫视HD
   'dfws' => 412, //东方卫视
   'dfhd' => 359, //东方卫视HD
   'tjws' => 427, //天津卫视
   'tjhd' => 365, //天津卫视HD
   'cqws' => 439, //重庆卫视
   'cqhd' => 368, //重庆卫视HD
   'hljws' => 432, //黑龙江卫视
   'hljhd' => 361, //黑龙江卫视HD
   'jlws' => 417, //吉林卫视
   'lnws' => 429, //辽宁卫视
   'lnhd' => 362, //辽宁卫视HD
   'nmws' => 424, //内蒙古卫视
   'nxws' => 437, //宁夏卫视
   'gsws' => 438, //甘肃卫视
   'qhws' => 425, //青海卫视
   'sxws' => 416, //陕西卫视
   'hbws' => 422, //河北卫视
   'hbhd' => 373, //河北卫视HD
   'sxiws' => 428, //山西卫视
   'sdws' => 419, //山东卫视
   'sdhd' => 367, //山东卫视HD
   'ahws' => 414, //安徽卫视
   'ahhd' => 360, //安徽卫视HD
   'hnws' => 415, //河南卫视
   'hubws' => 420, //湖北卫视
   'hubhd' => 366, //湖北卫视HD
   'hunws' => 410, //湖南卫视
   'hunhd' => 356, //湖南卫视HD
   'jxws' => 434, //江西卫视
   'jxhd' => 374, //江西卫视HD
   'jsws' => 411, //江苏卫视
   'jshd' => 358, //江苏卫视HD
   'zjws' => 409, //浙江卫视
   'zjhd' => 357, //浙江卫视HD
   'dnws' => 435, //东南卫视
   'dnhd' => 372, //东南卫视HD
   'xmws' => 430, //厦门卫视
   'gdws' => 418, //广东卫视
   'gdhd' => 364, //广东卫视HD
   'szws' => 413, //深圳卫视
   'szhd' => 363, //深圳卫视HD
   'gxws' => 421, //广西卫视
   'ynws' => 433, //云南卫视
   'gzws' => 436, //贵州卫视
   'scws' => 426, //四川卫视
   'schd' => 370, //四川卫视HD
   'xjws' => 431, //新疆卫视
   'btws' => 440, //兵团卫视
   'xzws' => 423, //西藏卫视
   'hinws' => 441, //海南卫视
   'bjwy' => 400, //北京文艺
   'bjwyhd' => 352, //北京文艺HD
   'bjys' => 402, //北京影视
   'bjyshd' => 353, //北京影视HD
   'bjcj' => 403, //北京财*
   'bjsh' => 404, //北京生活
   'bjtyxx' => 408, //北京体育休闲
   'bjkjjs' => 401, //北京纪实科教
   'bjkjjshd' => 355, //北京纪实科教HD
   'bjxw' => 406, //北京新闻
   'bjxwhd' => 354, //北京新闻HD
   'bjkk' => 407, //北京卡酷少儿
   'shjsrw' => 369, //上海纪实人文
   'qjs' => 375, //全纪实 x
   'jyjs' => 371, //金鹰纪实
    ];
$d = file_get_contents("https://iptv.luas.edu.cn/tv-show-detail/".$n[$id]);
preg_match('/streamurl = "(.*?)"/',$d,$p);
$playurl = trim("https:".$p[1]);
header("Content-Type: application/vnd.apple.mpegurl");
header ('location:'.$playurl);
//echo $playurl;
?>
