<?php
$file = $_FILES['picture'];

if ($file['type'] === 'image/jpeg') {
    $path = 'images/' . $file['name'];
    $success = move_uploaded_file($file['tmp_name'], $path);
    if ($success) {
        echo '成功';
    } else {
        echo '失敗';
    };
} else {
    echo '不正です。';
}
?>