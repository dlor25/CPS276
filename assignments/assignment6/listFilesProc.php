<?php
require_once 'Crud.php';
$crud = new Crud();
$output = $crud->getA6('list');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>List Files Proc</title>

</head>
<body class="container">

    <h1>List Files</h1>

    <a href="fileUploadProc.php">Add File</a><br>

    <?php  
        echo $output; 
    ?>
</body>
</html>