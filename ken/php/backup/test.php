<?php
mb_language("Ja") ;
mb_internal_encoding("utf-8") ;
$mailto="test1@localhost";
$subject="タイトルですよ";
$content="内容を入れます\nあああ\nいいい";
$mailfrom="From:" .mb_encode_mimeheader("まさご") ."<test1@localhost>";
$ret = mb_send_mail($mailto,$subject,$content,$mailfrom);
echo $ret;
?>