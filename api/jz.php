<?php
  $id = $_GET['id']; // 0 胶州综合， 1 胶州生活
  $json = json_decode(file_get_contents("https://app.litenews.cn/v1/app/play/tv/live?orgid=305"))->data;
  $playurl = $json[$id]->stream;
  header("Location:".$playurl);
?>