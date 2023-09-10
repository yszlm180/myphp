<?php
error_reporting(0);
$id = isset($_GET['id'])?$_GET['id']:'cctv1';
$n = [
    'cctv1' => [265183188,265183189],//CCTV-1HD
    'cctv1b' => [265183188,265183669],//CCTV-1HD2
    'cctv2' => [265667329,265667330],//CCTV-2HD
    'cctv3' => [265667206,265667207],//CCTV-3HD
    'cctv4' => [265667639,265667640],//CCTV-4HD
    'cctv4o' => [265667313,265667314],//CCTV-4欧洲
    'cctv4a' => [265667335,265667336],//CCTV-4美洲
    'cctv5' => [265667565,265667566],//CCTV-5HD
    'cctv5b' => [265667565,395255638],//CCTV-5HD2
    'cctv5p' => [265106763,265125883],//CCTV-5+HD
    'cctv5p2' => [265106763,265106764],//CCTV-5+HD2
    'cctv6' => [265667482,265667483],//CCTV-6HD
    'cctv7' => [265667268,265667269],//CCTV-7HD
    'cctv8' => [265667466,265667467],//CCTV-8HD
    'cctv9' => [265667202,265667203],//CCTV-9HD
    'cctv10' => [265667631,265667632],//CCTV-10HD
    'cctv11' => [265667429,265667430],//CCTV-11HD
    'cctv12' => [265667607,265667608],//CCTV-12HD
    'cctv13' => [265667474,265667476],//CCTV-13HD
    'cctv14' => [265667325,265667326],//CCTV-14HD
    'cctv15' => [265667535,265667536],//CCTV-15HD
    'cctv17' => [265667526,265667527],//CCTV-17HD

    'cgtne' => [265218872,265218873],//CGTN西语
    'cgtna' => [265219154,265219155],//CGTN阿语

    'chcjtyy' => [265667645,265667646],//CHC家庭影院

    'bjws' => [265668911,265668912],//北京卫视HD,
    'dfws' => [264104266,264104267],//东方卫视HD
    'dfws2' => [264104266,266579023],//东方卫视HD2
    'cqws' => [531262033,531262034],//重庆卫视
    'jlws' => [531262154,531262155],//吉林卫视
    'lnws' => [265669068,265669069],//辽宁卫视HD
    'nmws' => [531261982,531261983],//内蒙古卫视
    'nxws' => [531261057,531261058],//宁夏卫视
    'gsws' => [531261933,531261934],//甘肃卫视
    'qhws' => [531262027,531262028],//青海卫视
    'sxws' => [531262099,531262100],//陕西卫视HD
    'sdws' => [531261825,531261826],//山东卫视HD
    'hubws' => [531261978,531261979],//湖北卫视HD
    'hunws' => [265667721,265667722],//湖南卫视HD
    'jxws' => [531262091,531262092],//江西卫视HD
    'jsws' => [264104188,264104189],//江苏卫视HD
    'gdws' => [263541274,275480030],//广东卫视HD,
    'gdws2' => [263541274,263541275],//广东卫视HD2,
    'dwqws' => [265218882,265218883],//大湾区卫视
    'scws' => [531261937,531261938],//四川卫视HD
    'xjws' => [531262095,531262096],//新疆卫视
    'xzws' => [524854265,524854266],//西藏卫视
    'hinws' => [531262161,531262162],//海南卫视

    'shdy' => [265667494,265667495],//四海钓鱼
    'jsjy' => [265219146,265219147],//江苏教育
    'sdjy' => [265218942,265218943],//山东教育卫视
    'yxfy' => [265667664,265667665],//游戏风云HD
    'hxjc' => [202812323,202812324],//欢笑剧场4K 
    'dfgw' => [97019370,97019371],//东方购物
    'zjjl' => [80891335,80891336],//之江纪录 
    'hzzh' => [76680661,76680662],//杭州综合 
    'hzmz' => [76680568,76680569],//杭州明珠 
    'hzsh' => [76680574,76680575],//杭州生活 
    'hzys' => [76680745,76680746],//杭州影视 
    'hzse' => [76680756,76680757],//杭州少儿体育 
    ];
    $port = rand(7100, 7150);
    $post = '{"terminalType":"AndroidPhone","loginType":"3"}';
    $url = "http://vsc.aikan.miguvideo.com:{$port}/EPG/VPE/PHONE/Authenticate";
    $d = get($url,[],$post);
    $sessionID = json_decode($d) -> sessionID;

    $pdata = '{"businessType":"BTV","channelID":"'.$n[$id][0].'","mediaID":"'.$n[$id][1].'"}';
    $uri = "http://vsc.aikan.miguvideo.com:{$port}/VSP/V3/PlayChannel";
    $data = get($uri,['Cookie: JSESSIONID='.$sessionID],$pdata);
    $playurl = json_decode($data)->playURL;
    header ('location:'.$playurl);
    //echo $playurl;

function get($url,$h,$post){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$h);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
?>