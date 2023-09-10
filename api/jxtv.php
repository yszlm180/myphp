<?php
    //今视频app
$id = isset($_GET['id'])?$_GET['id']:'jxgg';
$n = [
    'jxws' => 'jxtv1',//江西卫视
    'jxds' => 'jxtv2',//江西都市
    'jxjs' => 'jxtv3_hd',//江西经济生活
    'jxys' => 'jxtv4',//江西影视
    'jxgg' => 'jxtv5',//江西公共农业
    'jxse' => 'jxtv6',//江西少儿
    'jxxw' => 'jxtv7',//江西新闻
    'jxyd' => 'jxtv8',//江西移动
    'fsgw' => 'fsgw',//江西风尚购物
    ];

$t = time();
$ts = $t."123";
$token = md5("com.sobey.cloud.view.jiangxiandroidjxntv".$ts);
$url = "https://app.jxgdw.com/api/media/auth?";
$params = "app_version=5.08.01&device_id=0000000000000000000000000000000000000000&siteid=10001&t={$t}&time={$ts}&token={$token}&type=android";
$sign = md5($params."&appkey=jsp@123!@#iUuVzhDE9GuGL&timestamp={$t}");
$url .=$params."&sign={$sign}";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$data = curl_exec($ch);
curl_close($ch);

$json = json_decode($data);
$d = $json->d;
$t = $json->t;
$token = json_decode(openssl_decrypt($json->data,"AES-128-CBC","eteBiJ6uXd@mq3hJ",0,"Iti87RTSwb02jAyG"))->token;
$m3u8 = "https://jsp-tv-live.jxtvcn.com.cn/live-jsp/tv_{$n[$id]}.m3u8?d={$d}&t={$t}&token=".$token;
$burl = 'https://jsp-tv-live.jxtvcn.com.cn/live-jsp/';
$str = file_get_contents($m3u8);
header("Content-Type: application/vnd.apple.mpegURL");
print_r(preg_replace("/(.*?.ts)/i", $burl."$1",$str));
?>