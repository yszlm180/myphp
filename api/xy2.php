<?php
error_reporting(0);
$id = isset($_GET['id'])?$_GET['id']:'';
if($id=='list'|$id==''){
$html = file_get_contents('https://iptv.luas.edu.cn/vod-show?tags=0_4&page=1');
$html .= file_get_contents('https://iptv.luas.edu.cn/vod-show?tags=0_4&page=2');
$html .= file_get_contents('https://iptv.luas.edu.cn/vod-show?tags=0_6&page=1');
$html .= file_get_contents('https://iptv.luas.edu.cn/vod-show?tags=0_6&page=2');
$html .= file_get_contents('https://iptv.luas.edu.cn/vod-show?tags=0_6&page=3');
preg_match_all('/<div class="card-img">\s+<img src="\/cover\/tv\/(\d+)\.jpg" alt="([^"]+)"/', $html, $f);

$titles = [];
for ($i = 0; $i < count($f[0]); $i++) {
    $id = $f[1][$i];
    $title = $f[2][$i];
    $titles[$id] = $title;
}

foreach ($titles as $id => $title) {
    echo $title . ", " . get_http_type().$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?id='.$id . "<br>";
}
}else{
$d = file_get_contents("https://iptv.luas.edu.cn/tv-show-detail/".$id);
preg_match('/streamurl = "(.*?)"/',$d,$p);
$playurl = trim("https:".$p[1]);
header("Content-Type: application/vnd.apple.mpegurl");
header ('location:'.$playurl);


}
function get_http_type()
{
$http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
return $http_type;
}
?>
