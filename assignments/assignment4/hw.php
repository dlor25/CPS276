<?

$output=null;

if(count($_POST) > 0){
    require_once 'addNameProc.php';
    $addName = new AddNamesProc();
    $output = $addName->addClearNames();
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intital-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Name List</title>
    </head>
    <body>
        <main class="container">
            <h1>Add Names</h1>

            <form method="post">
            
            <div class="form-group">
            <input type="submit" value="Add Name" name="addname" class="btn btn-primary" id="addname">
            <input type="submit" value="Clear Names" name="clearnames" class="btn btn-primary" id="clearnames">
            </div>

            <div class="form-group">
                <label for="name">Enter Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="namelist">List of Names</label>
                <textarea readonly style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output; ?></textarea>
            </div>

            </form>
        </main>
    </body>
</html>