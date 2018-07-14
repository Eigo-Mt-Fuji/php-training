<?php

require_once 'vendor/autoload.php';

// 指定したXMLファイルの中身を文字列形式で取得
$xml = file_get_contents('https://aws.amazon.com/jp/new/feed/');

// XML（文字列形式）をロードし、オブジェクト形式に変換
$xml_objects = simplexml_load_string($xml); 

// 値を取り出す
$channel_title = (string)($xml_objects->channel->description);
printf("Channel Title: %s", $channel_title);

// 更に
//$xml_objects_array = json_decode(json_encode($xml_objects), TRUE) 


