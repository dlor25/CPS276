<?php
// Be sure your form has the enctype attribute set.
// $_FILES is a superglobal, just like $_REQUEST.
// To check the file type, see the 'type' field in $_FILES
// To get the uploaded location of the file, see the 'tmp_name' field in $_FILES
// To get the original name of the file, see the 'name' field in $_FILES
// To get the original size of the file, see the 'size' field in $_FILES

require_once 'Crud.php';
$crud = new Crud();
$msg = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_file = 'UploadedFiles/' . basename($_FILES["myfile"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;

//    print_r($_FILES);

    if ($_FILES['myfile']["size"] > 100000) {
        $msg = "Sorry, your file is too large.";
        $uploadOk = 0;
    }


    if($imageFileType != "pdf") {
        $msg .= "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        $msg .= "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } 
    
    else {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            $output = $crud->addName();
            $msg = "The file ". $_POST['filename']. " has been uploaded.";
        } 
        
        else {
            $msg = "Sorry, there was an error uploading your file.";
        }
    }
}

// if(count($_POST) > 0) {
//     copy($_FILES['myfile']['name'],$_POST['filename']);
// }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
        <title>Upload File Project</title>

  </head>
  <body>
    <div id="wrapper" class="container">
        <h1>File Upload</h1>


        <div class="form-group">
            <a href="listFilesProc.php">Show File List</a>
        </div>
        
        <form enctype="multipart/form-data" method="post">

            <p><?php echo $msg; ?></p>

            <div class="form-group">
                <label for="foldername">File Name</label>
                <input type="text" class="form-control" name="filename" id="filename">
            </div>

            <div class="form-group">
            <input type="file" name="myfile" accept=".pdf">
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Upload File" name="upload">
            </div>

        </form>
    </div>
  </body>
</html>