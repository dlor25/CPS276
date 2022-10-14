<?

$nameAr=array();

if(count($_POST) > 0){

    if($_REQUEST['addname'] == "Add Name") {

    //    echo($_REQUEST["list"]);
        $nameAr = explode("\n",$_POST["list"]);

        $x = $_POST["name"];
        $ar = explode(' ',$x);
    //    print_r($ar);
//        echo('<hr>');
        if($_POST["name"] != "") {
            $z = $ar[1] . ', ' . $ar[0];
            //    echo($z);

        array_push($nameAr, $z);
        sort($nameAr);
        }
    //    echo('<br>');
    //    echo('<br>');
    //    $nameList = implode(" ",$nameAr);
    //    echo($nameList);

        $nameList = implode("\n",$nameAr);
    }

    if(isset($_POST['clearname'])){
        $nameList = null;
 }

}

    else{
    $nameList = null;
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="Firefox">
        <meta name="viewport" content="width=device-width, intital-scale=1.0">
        <title>Name List</title>
    </head>
    <body>
        <main class="container">
            <h1>Add Names</h1>
                <form method="post">
                            <input type="submit" value="Add Name" name="addname">
                            <input type="submit" value="Clear Names" name="clearname">
                            <br><br>

                            Enter Name<br>
                            <input type="text" name="name" size=50>
                            <br><br>

                            List of Names<br>
                            <textarea readonly name="list" rows="7" cols="50"><?=$nameList?></textarea>
                </form>
        </main>
    </body>
</html>