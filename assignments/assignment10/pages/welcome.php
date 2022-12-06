<?php


session_start();
if($_SESSION['access'] !== "accessGranted"){
  header('Location:https://russet-v8.wccnet.edu/~dlor/CPS276/assignments/assignment10/index.php?page=welcome');
}



function init(){
    return ["<h1>Welcome</h1>","<p>Welcome the stick form mod application.  Click one of the lines above</p>"];
}

?>