<?php
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'ピーチ'
];
?>

<dl>
    <?php foreach ($fruits as $english => $japanese): ?>
        <dt><?php echo $english; ?></dt>
        <dd><?php echo $japanese; ?></dd>
    <?php endforeach; ?>
</dl>