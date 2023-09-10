<?php
$id = isset($_GET['id']) ? $_GET['id'] : 'zh';
$n = array(
  'zh' => 16, //杭州综合
  'xh' => 17, //西湖明珠
  'sh' => 18, //杭州生活
  'qt' => 20, //青少体育
  'ys' => 21, //杭州影视
  'ds' => 22, //杭州导视
  'r1' => 23, //FM90.7MHz
  'r2' => 24, //FM89.0MHz
  'r3' => 25, //FM105.4MHz
  'r4' => 26, //FM91.8MHz
  'r5' => 27, //AM954KHz
  'hl' => 28, //Hoolo(综合)
  'r6' => 31, //FM100.4MHz
  'fy' => 32, //富阳综合
);
$response = file_get_contents('https://mapi.hoolo.tv/api/v1/channel_detail.php?channel_id='.$n[$id]);
$m3u8 = json_decode($response)[0]->m3u8;
header('Location: '.$m3u8);
?>
