<?php

header('Content-type: text/javascript');

// 从文件中读取数据到变量

$ch = curl_init();
$timeout = 0; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL,'https://interface.meiriyiwen.com/article/today?dev=1');
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$json_string = curl_exec($ch);

$data = json_decode($json_string, true);

?>

document.getElementById("title").innerHTML="<?php echo $data['data']['title'] ?>";

document.getElementById("author").innerHTML="<?php echo $data['data']['author'] ?>";

document.getElementById("content").innerHTML="<?php echo $data['data']['content'] ?>";
