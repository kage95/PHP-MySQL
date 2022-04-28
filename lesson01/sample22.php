<?php
$age = '２３';

$age = mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)){
    echo $age;
} else {
    echo '数字で入力してください';
}
?>