<?php
require_once 'classes/Date_time.php';
$dt = new Date_time();
$notes = $dt->checkSubmit();
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, intital-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Add Note</title>
    </head>
    <body>
    <div id="wrapper" class="container">
        <h1>Add Note</h1>

        <div class="form-group">
            <a href="displayNotes.php">Display Notes</a>
        </div>
        
        <form method="post">

            <p><?php echo $notes; ?></p>

            <div class="form-group">
                <label for="dateTime">Date and Time</label>
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
            </div>

            <div class="form-group">
                <label for="note">Note</label>
                <textarea style="height: 450px;" class="form-control" id="note" name="note"></textarea>
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add Note" name="addnote">
            </div>

        </form>
    </div>
    </body>
</html>