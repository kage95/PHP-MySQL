<?php
$memo = filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_SPECIAL_CHARS);

require('dbconnect.php');
$stmt = $db->prepare('insert into memos(memo) values(?)');
if (!$stmt) :
    die($db->error);
endif;
$stmt->bind_param('s',$memo);
$ret = $stmt->execute();

if ($ret):
    echo '登録';
else:
    echo '$db->error';
endif;
?>