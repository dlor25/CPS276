<?php

$pw = "password";

$hpw = password_hash($pw,PASSWORD_DEFAULT);

echo $hpw;

?>