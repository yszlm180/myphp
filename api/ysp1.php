<?php

$id = isset($_GET['id']) ? $_GET['id'] : 'cctv1';
$n = [
    // 央视
    'cctv4k' => [2000266302, 600002264],  // cccv-4k
    'cctv1' => [2000210103, 600001859],  // cccv1
    'cctv2' => [2000203602, 600001800],  // cccv2
    'cctv3' => [2000203803, 600001801],  // cccv3(vip)
    'cctv4' => [2000204803, 600001814],  // cccv4
    'cctv5' => [2000205103, 600001818],  // cccv5
    'cctv5p' => [2000204503, 600001817],  // cccv5+
    'cctv6' => [2000203303, 600001802],  // cccv6(vip)
    'cctv7' => [2000510003, 600004092],  // cccv7
    'cctv8' => [2000203903, 600001803],  // cccv8(vip)
    'cctv9' => [2000499403, 600004078],  // cccv9
    'cctv10' => [2000203503, 600001805],  // CCTV10
    'cctv11' => [2000204103, 600001806],  // CCTV11
    'cctv12' => [2000202603, 600001807],  // CCTV12
    'cctv13' => [2000204603, 600001811],  // CCTV13
    'cctv14' => [2000204403, 600001809],  // CCTV14
    'cctv15' => [2000205003, 600001815],  // CCTV15
    'cctv16' => [2012375002, 600098637],  // CCTV16
    'cctv16-4k' => [2012375003, 600099502],  // CCTV16-4k(vip)
    'cctv17' => [2000204203, 600001810],  // CCTV17
    // 央视数字
    'bqkj' => [2012513403, 600099649],  // CCTV兵器科技(vip)
    'dyjc' => [2012514403, 600099655],  // CCTV第一剧场(vip)
    'hjjc' => [2012511203, 600099620],  // CCTV怀旧剧场(vip)
    'fyjc' => [2012513603, 600099658],  // CCTV风云剧场(vip)
    'fyyy' => [2012514103, 600099660],  // CCTV风云音乐(vip)
    'fyzq' => [2012514203, 600099636],  // CCTV风云足球(vip)
    'dszn' => [2012514003, 600099656],  // CCTV电视指南(vip)
    'nxss' => [2012513903, 600099650],  // CCTV女性时尚(vip)
    'whjp' => [2012513803, 600099653],  // CCTV央视文化精品(vip)
    'sjdl' => [2012513303, 600099637],  // CCTV世界地理(vip)
    'gefwq' => [2012512503, 600099659],  // CCTV高尔夫网球(vip)
    'ystq' => [2012513703, 600099652],  // CCTV央视台球(vip)
    'wsjk' => [2012513503, 600099651],  // CCTV卫生健康(vip)
    // 央视国际
    'cgtn' => [2001656803, 600014550],  // CGTN
    'cgtnjl' => [2010155403, 600084781],  // CGTN纪录
    'cgtne' => [2010152503, 600084744],  // CGTN西语
    'cgtnf' => [2010153503, 600084704],  // CGTN法语
    'cgtna' => [2010155203, 600084782],  // CGTN阿语
    'cgtnr' => [2010152603, 600084758],  // CGTN俄语
    // 卫视
    'bjws' => [2000272103, 600002309],  // 北京卫视
    'dfws' => [2000292403, 600002483],  // 东方卫视
    'cqws' => [2000297803, 600002531],  // 重庆卫视
    'hljws' => [2000293903, 600002498],  // 黑龙江卫视
    'lnws' => [2000281303, 600002505],  // 辽宁卫视
    'hbws' => [2000293403, 600002493],  // 河北卫视
    'sdws' => [2000294803, 600002513],  // 山东卫视
    'ahws' => [2000298003, 600002532],  // 安徽卫视
    'hnws' => [2000296103, 600002525],  // 河南卫视
    'hubws' => [2000294503, 600002508],  // 湖北卫视
    'hunws' => [2000296203, 600002475],  // 湖南卫视
    'jxws' => [2000294103, 600002503],  // 江西卫视
    'jsws' => [2000295603, 600002521],  // 江苏卫视
    'zjws' => [2000295503, 600002520],  // 浙江卫视
    'dnws' => [2000292503, 600002484],  // 东南卫视
    'gdws' => [2000292703, 600002485],  // 广东卫视
    'szws' => [2000292203, 600002481],  // 深圳卫视
    'gxws' => [2000294203, 600002509],  // 广西卫视
    'gzws' => [2000293303, 600002490],  // 贵州卫视
    'scws' => [2000295003, 600002516],  // 四川卫视
    'hinws' => [2000291503, 600002506],  // 海南卫视
];

$cnlid = "" . $n[$id][0] . "";
$pid = "" . $n[$id][1] . "";
$guid = "00000000_00000000000"; //自抓或生成 无限制
$salt = '0f$IVHi9Qno?G';
$platform = "5910204";
$key = hex2bin("48e5918a74ae21c972b90cce8af6c8be");
$iv = hex2bin("9a7e7d23610266b1d9fbf98581384d92");
$ts = time();
$el = "|{$cnlid}|{$ts}|mg3c3b04ba|V1.0.0|{$guid}|{$platform}|https://www.yangshipin.c|mozilla/5.0 (windows nt ||Mozilla|Netscape|Win32|";
$len = strlen($el);
$xl = 0;
for ($i = 0; $i < $len; $i++) {
    $xl = ($xl << 5) - $xl + ord($el[$i]);
    $xl &= $xl & 0xFFFFFFFF;
}
$xl = ($xl > 2147483648) ? $xl - 4294967296 : $xl;  // 吊毛 64位PHP
$el = '|' . $xl . $el;

$ckey = "--01" . strtoupper(bin2hex(openssl_encrypt($el, "AES-128-CBC", $key, 1, $iv)));

$params = [
    "adjust" => 1,
    "appVer" => "V1.0.0",
    "app_version" => "V1.0.0",
    "cKey" => $ckey,
    "channel" => "ysp_tx",
    "cmd" => "2",
    "cnlid" => $cnlid,
    "defn" => "fhd",
    "devid" => "devid",
    "dtype" => "1",
    "encryptVer" => "8.1",
    "guid" => $guid,
    "livepid" => $pid,
    "otype" => "ojson",
    "platform" => $platform,
    "rand_str" => rand_str(),
    "sphttps" => "1",
    "stream" => "2"
];

$sign = md5(http_build_query($params) . $salt);
$params["signature"] = $sign;

$bstrURL = "https://player-api.yangshipin.cn/v1/player/get_live_info";
$headers = [
    "Content-Type: application/json",
    "Referer: https://www.yangshipin.cn/",
    "Cookie: guid={$guid};vplatform=109",
    "Yspappid: 519748109",
];

$ch = curl_init($bstrURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));

$data = curl_exec($ch);
curl_close($ch);

$json = json_decode($data);
$playurl = explode('?', $json->data->playurl)[0];

if ($playurl == null) {
    echo "应版权方要求，暂停提供直播信号。";
} else {
    header('Content-Type: application/vnd.apple.mpegurl');
    header("location:" . $playurl);
    //echo $playurl;
}

function rand_str()
{
    $e = "ABCDEFGHIJKlMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $i = 0;
    $str = "";
    while ($i < 10) {
        $str .= $e[mt_rand(0, 61)];
        $i++;
    }
    return $str;
}

?>