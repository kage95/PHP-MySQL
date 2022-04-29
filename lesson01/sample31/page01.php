<?php
require('intax.php');

$price = 2000;
$price_tax = intax($price);
echo $price_tax;
?>