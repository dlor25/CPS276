<?

class AddNamesProc{
    public function addClearNames () {

        if(isset($_POST['addname'])){
            $nameAr=array();
            $nameAr = explode("\n",$_POST["namelist"]);

            $x = $_POST["name"];
            $ar = explode(' ',$x);
            //    print_r($ar);
            //        echo('<hr>');
            //    echo($z);

                if($_POST["name"] != "") {
                    $z = $ar[1] . ', ' . $ar[0];
                    array_push($nameAr, $z);
                    sort($nameAr);
                }

        //    echo('<br>');
        //    echo('<br>');
        
            $output = implode("\n",$nameAr);

            return $output;
        }

        if(isset($_POST['clearname'])){
            header('Location: hwtest1copy.php');
        }
        
        else{
            return $output=null;
        }
    }

}

?>