<?php

namespace Models ;

use Classes\Mark;

class MarkModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function getMarks($studentId){
        $pre = "SELECT * FROM marks WHERE studentid = ?" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(1,$studentId,\PDO::PARAM_INT);
        $marks = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $marks[] = new Mark($row['id'],$row['studentid'],$row['courseid'],$row['mark'],$row['observation']);
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $marks ;
    }
}