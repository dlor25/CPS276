<?php
$names = ["Scott","Karen","Mike","Judy"];
$output = "<ul>";
foreach ($names as $name) {
$output .= "<li>{$name}</li>";
}
$output .= "</ul>";
?>

<? echo $output ?>
