<?php
require_once 'Pdo_methods.php';

class Crud {

    public function getA7($type){
        $pdo = new PdoMethods();
        
        $sql = "SELECT * FROM a7";

        $records = $pdo->selectNotBinded($sql);

        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($records == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($records) != 0){
				if($type == 'list'){return $this->createList($records);}
				if($type == 'input'){return $this->createInput($records);}	
            }
            else {
                return 'No a7 found';
            }
        }
    }



	public function addName(){
	
		$pdo = new PdoMethods();

        $path = $_FILES['myfile']['full_path'];

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO a7 (file_path, file_name) VALUES ('$path', :filename)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			[':filename',$_POST['filename'],'str']
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the name';
		}
		else {
			return 'Name has been added';
		}
	}




    private function createList($records){
		$list = '<ul>';
		foreach ($records as $row){
			$list .= "<li><a target='_blank' href='UploadedFiles/{$row['file_path']}'>{$row['file_name']}</a></li>";
		}
		$list .= '</ul>';
		return $list;
	}
    
}

?>

<!-- UploadedFiles/.$_FILES['myfile']['name'] 
     'UploadedFiles/newsletterorform1.pdf'
-->