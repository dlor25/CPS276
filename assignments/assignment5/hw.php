<?

$msg = "";
//$output = "";   //Reset button set-up 1/3

if(count($_POST) > 0){
    require_once "directory.php";
    $directory = new Directories();
    $msg = $directory->addDirectory();
    }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Directory</title>

        <style>
        body {
            font: 250%/1.5 sans-serif;
        }
        </style>

    </head>

    <body>
        <div id="wrapper" class="container">
            <h1>Files and Directory Assignment</h1>
            <p>Enter folder name and file contents. Folder names should contain alpha-numeric characters only.</p>
            <p><?php echo $msg; 
        //      echo $output; ?></p>    <!-- Reset button set-up 2/3 --> 

            <form method="POST">

            <div class="form-group">
                <label for="foldername">Folder Name</label>
                <input type="text" class="form-control" name="foldername" id="foldername">
            </div>

            <div class="form-group">
                <label for="foldercontent">Folder Content</label>
                <textarea style="height: 154px;" class="form-control" id="foldercontent" name="foldercontent"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        <!--       <input type="submit" class="btn btn-primary" name="remove" value="Reset">   Reset button set-up 3/3    -->
            </div>

            </form>
        
        </div>
        
    </body>
</html>