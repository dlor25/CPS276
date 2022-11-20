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

        <title>Display Notes</title>
    </head>
    <body>
    <div id="wrapper" class="container">
        <h1>Display Notes</h1>
        <div class="form-group">
            <a href="addNote.php">Add Note</a>
        </div>

        <form method="post">

        <div class="form-group">
            <label for="foldername">Beginning Date</label>
            <input type="date" class="form-control" id="begDate" name="begDate">
        </div>

        <div class="form-group">
            <label for="foldername">Ending Date</label>
            <input type="date" class="form-control" id="endDate" name="endDate">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Get Notes" name="getnotes">
        </div>

        <?php echo $notes ?>

        </form>
    </div>



    </body>
</html>