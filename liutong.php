<?php
$urls = array(
'http://www.nyhtc.cn.com',
'http://www.nyhtc.cn.com/a.html',
'http://www.nyhtc.cn.com/sitemap.txt',
);
$api = 'http://data.zz.baidu.com/urls?site=nyhtc.cn&token=A5xMG3q1OW2V5oI6';
$ch = curl_init();
$options = array(
CURLOPT_URL => $api,
CURLOPT_POST => true,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POSTFIELDS => implode("\n", $urls),
CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>