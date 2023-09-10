<?php
error_reporting(0);
$ts = $_GET['ts'];
if(!$ts) {
  $id = isset($_GET['id'])?$_GET['id']:'ynws';
  $n = [
  'ynws' => 'yunnanweishi',
  'ynds' => 'yunnandushi',
  'ynyl' => 'yunnanyule',
  'yngg' => 'yunnangonggong',
  'yngj' => 'yunnanguoji',
  'ynse' => 'yunnanshaoer',
   ];
  $url = 'https://api.yntv.ynradio.com/index/jmd/getRq?name='.$n[$id];
  $d = json_decode(get($url));
  $name = $d->url;
  $string = $d->string;
  $time = $d->time;
  $purl = 'https://tvlive.yntv.cn'.$name.'?wsSecret='.$string.'&wsTime='.$time;
  header('Content-Type: application/vnd.apple.mpegurl');
  echo preg_replace("/(.*?.ts)/i","http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF']."?ts=https://tvlive.yntv.cn/live/".$n[$id]."/$1",get($purl));
  } else {
  $s = ts(trim($ts));
  header('Content-Type: video/MP2T');
  }

function get($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64)","Referer: https://www.yntv.cn/"]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function ts($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64)","Referer: https://www.yntv.cn/"]);
    $result = curl_exec($ch);
    curl_close($ch);
}
?>