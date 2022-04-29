<?php
function intax($value) {
    return ceil($value * 1.1);
}
?>

<?php
$price = 3250;
$price_tax = intax($price);
echo $price_tax;