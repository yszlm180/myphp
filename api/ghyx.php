<?php
    $channel = empty($_GET['id']) ? "CCTV1HD_6000" : trim($_GET['id']);
    $stream = "http://111.31.122.45/yfsv.vsd.gehua.net.cn/live/ipcdn,{$channel}K/";
    $timestamp = intval((time()-60)/6);
    $current = "#EXTM3U".PHP_EOL;
    $current.= "#EXT-X-VERSION:3".PHP_EOL;
    $current.= "#EXT-X-TARGETDURATION:6".PHP_EOL;
    $current.= "#EXT-X-MEDIA-SEQUENCE:{$timestamp}".PHP_EOL;
    for ($i=0; $i<6; $i++)
    {
        $current.= "#EXTINF:6,".PHP_EOL;
        $current.= $stream.rtrim(chunk_split($timestamp, 3, "/"), "/").".ts".PHP_EOL;
        $timestamp = $timestamp + 1;
    }
    header("Content-Type: application/vnd.apple.mpegurl");
    header("Content-Disposition: attachment; filename=index.m3u8");
    echo $current;