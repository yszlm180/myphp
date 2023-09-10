<?php
    
    $id = $_GET['id']?:"cctv1hd_3000";
    $seq = intval(time()/10)-8;
    $content = "#EXTM3U\n#EXT-X-VERSION:3\n#EXT-X-TARGETDURATION:10\n#EXT-X-MEDIA-SEQUENCE:{$seq}\n";

    for($i=0;$i<7;$i++)
    {
        $content.="#EXTINF:10.0,\n";
        $content.="http://live1.hrtn.net/live/{$id}/{$id}_".strval($seq+$i).".ts\n";
    }

    header("Content-Type: application/vnd.apple.mpegURL");
    header("Content-Disposition: filename=playlist.m3u8");
    echo $content;  
?>