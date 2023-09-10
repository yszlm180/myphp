<?php
$id=isset($_GET['id'])?$_GET['id']:'jmzh';
$n = [
  'jmzh' => '4x3T0dO',//江门综合
  'jmqxsh' => 'qzohscw',//江门侨乡生活
  ];
$t = time();
$token = md5($t.$n[$id].'cutvLiveStream|Dream2017');
$bstrURL = "http://cls2.cutv.com/getCutvHlsLiveKey?t=".$t."&token=".$token."&id=".$n[$id];
$p = file_get_contents($bstrURL);
$live = 'http://tideweblive.jmtv.cn/lsdream/'.$n[$id].'/993/'.$p.'.m3u8';
$r = 'http://www.jmtv.cn/live/jm_live_h5.shtml';
$h = ["User-Agent: Mozilla/5.0 (Windows NT 6.1)","Referer: $r",];
$ch = curl_init($live);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
curl_setopt($ch, CURLOPT_REFERER, $r);
$d = curl_exec($ch);
curl_close($ch);
print_r(preg_replace("/(.*?.ts)/i",'http://tideweblive.jmtv.cn/lsdream/'.$n[$id].'/993/$1',$d));
?>