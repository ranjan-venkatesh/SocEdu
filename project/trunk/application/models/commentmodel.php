<?php

class CommentModel {

   
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

   
    public function getComments($inMediaID) {
        $sql = "SELECT fldName, fldText, DATE_FORMAT(fldDate, '%M %e %Y') AS fldDate FROM tblComments LEFT JOIN tbldata ON (fldAuthorID=fldId) WHERE fldMediaID=" . $inMediaID;
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
public function postComment($inMediaID){
$c=$_POST['comment'];
$u=$_SESSION['username'];
$sql="SELECT fldId FROM tbldata WHERE fldName='$u'";
$query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->fetchColumn();
        
$sql = "INSERT INTO tblComments (fldText,fldAuthorID,fldMediaID) VALUES ('$c','$result','$inMediaID')";
$query = $this->db->prepare($sql);
$query->execute();
}
}
