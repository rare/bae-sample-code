<?php
$bucket = "goodluck";	//set as your bucket name
$object = "/" . urlencode($_REQUEST["name"]);		//your object name
$content = "MBO\nMethod=POST\nBucket=" . $bucket . "\nObject=" . $object . "\n"; 
$sign = urlencode(base64_encode(hash_hmac('sha1', $content, getenv("HTTP_BAE_ENV_SK"), true)));
echo "http://bcs.duapp.com/" . $bucket . $object . "?sign=MBO:" . getenv("HTTP_BAE_ENV_AK") . ":" . $sign;