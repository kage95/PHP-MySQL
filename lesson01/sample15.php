<?php
$success = file_put_contents('date/news.txt',
    'ホームページをリニューアルしました');

if ($success !== false){
    echo 'ファイルの書き込みに成功しました。';
} else {
    echo 'ファイルの書き込みに失敗しました。';
};