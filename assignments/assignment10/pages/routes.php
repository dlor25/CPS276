<?php

$path = "index.php?page=welcome";
$cwd = "/home/d/l/dlor/public_html/CPS276/assignments/assignment10/";


$nav=<<<HTML
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