<?

require_once 'Pdo_methods.php';

class Date_time{
    public function checkSubmit () {

        if(isset($_POST['addnote'])){
            
            $pdo = new PdoMethods();

            /* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
            $sql = "INSERT INTO a9 (timestr, note) VALUES (:time, :note)";
    
                 
            /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
            $bindings = [
                [':time',strtotime($_POST['dateTime']),'str'],
                [':note',$_POST['note'],'str']
            ];
    
            /* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
            $result = $pdo->otherBinded($sql, $bindings);
    
            /* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
            if($result === 'error'){
                $notes = 'There was an error adding the note';

                return $notes;
            }
            else {
                $notes = 'Note has been added';

                return $notes;
            }
        }

        if(isset($_POST['getnotes'])){
            
            $pdo = new PdoMethods();
            
            $sql = "SELECT * FROM a9";

            // $sql = "SELECT timestr, note FROM a9 WHERE timestr BETWEEN :begDate AND :endDate ORDER BY timestr DESC";
    
            // /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
            // $bindings = [
            //     [':begDate',strtotime($_POST['begDate']),'str'],
            //     [':endDate',strtotime($_POST['endDate']),'str']
            // ];

            // $result = $pdo->otherBinded($sql, $bindings);

            $records = $pdo->selectNotBinded($sql);
    
            /* IF THERE WAS AN ERROR DISPLAY MESSAGE */

            // if($result === 'error'){
            //     $notes = 'There was an error adding the note';

            //     return $notes;
            // }

            if($records == 'error'){
                $notes = 'There has been and error processing your request';
                return $notes;
            }


            else {
                if(count($records) != 0){
                    $notes = $this->makeTable($records);

                    return $notes;
                }
                else {
                    $notes = 'No notes found';

                    return $notes;
                }
            }
        }

        // else 

        // $notes = "Failed";

        // return $notes;

    }
        
        private function makeTable($records){
            $notes = "<table class='table table-bordered table-striped'><thead><tr>";
            $notes .= "<th>Date/time</th><th>Note</th></tr><tbody>";
            foreach ($records as $row){
                $notes .="<tr><td>";
                
                $cdt = $row['timestr'];

                $notes .= date("M d, Y H:i:sA",$cdt);
                
                $notes .= "</td>";
    
                $notes .= "<td>{$row['note']}</td></tr>";
            }
            
            $notes .= "</tbody></table></form>";
            return $notes;
        }
        
}

?>