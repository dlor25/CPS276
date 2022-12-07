<?php

$path = "index.php?page=login";
$cwd = "/home/d/l/dlor/public_html/CPS276/assignments/assignment10/";

$nav="";



$staffNav=<<<HTML
    <nav>
        <ul class = "nav justify-content">
            <li class = "nav-item"><a class="nav-link" href="index.php?page=addContact">Add Contact</a></li>
            <li class = "nav-item"><a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a></li>
            <li class = "nav-item"><a class="nav-link" href="index.php?page=logout">Logout</a></li>
        </ul>
    </nav>
HTML;



$adminNav=<<<HTML
    <nav>
        <ul class = "nav justify-content">
            <li class = "nav-item"><a class="nav-link" href="index.php?page=addContact">Add Contact</a></li>
            <li class = "nav-item"><a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a></li>
            <li class = "nav-item"><a class="nav-link" href="index.php?page=addAdmin">Add Admin</a></li>
            <li class = "nav-item"><a class="nav-link" href="index.php?page=deleteAdmins">Delete Admin(s)</a></li>
            <li class = "nav-item"><a class="nav-link" href="index.php?page=logout">Logout</a></li>
        </ul>
    </nav>
HTML;

function security(){
    global $nav, $adminNav, $staffNav;
    session_start();
    if($_SESSION['accessGranted'] == "granted"){
        if ($_SESSION['status'] == "admin"){ 
            $nav = $adminNav;
        }
    }
    else {
        header("Location:https://russet-v8.wccnet.edu/~dlor/CPS276/assignments/assignment10/index.php?page=login");
    }
}

if(isset($_GET)){
    if($_GET['page'] === "addContact"){
        require_once($cwd.'pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once($cwd.'pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "addAdmin"){
        require_once($cwd.'pages/addAdmin.php');
        $result = init();

    }

    else if($_GET['page'] === "deleteAdmins"){
        require_once($cwd.'pages/deleteAdmins.php');
        $result = init();

    }

    else if($_GET['page'] === "logout"){
        require_once($cwd.'logout.php');
        $result = init();
    }

    else if($_GET['page'] === "login"){
        require_once($cwd.'pages/login.php');
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        require_once($cwd.'pages/welcome.php');
        $result = init();

    }


    else {
        header('location: '.$path);
    }
}

else {
    header('location: '.$path);
}



?>