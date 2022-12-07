<?php

require_once('/home/d/l/dlor/public_html/CPS276/assignments/assignment10/pages/routes.php');
$sec = security();



function init(){

    $msg = "<h1>Welcome</h1>";

    $msg .= "<p>Welcome ";
    $msg .= $_SESSION['name'];
    $msg .= "</p>";

    return [$msg,''];
}

?>