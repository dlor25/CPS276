<?php

    session_start();
    if($_SESSION['access'] == "accessGranted"){
        if ($_SESSION['status'] == "admin"){ 
            $nav = $adminNav;
        }
        elseif ($_SESSION['status'] == "staff"){ 
            $nav = $staffNav;
        }
    }
    else {
        header("Location:https://russet-v8.wccnet.edu/~dlor/CPS276/assignments/assignment10/index.php?page=login");
    }



function init(){

    $msg = "<h1>Welcome</h1>";

    $msg .= "<p>Welcome ";
    $msg .= $_SESSION['name'];
    $msg .= "</p>";

    return [$msg,''];
}

?>