<?php

class VideoModel {

    
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

   
    public function getVideo($inMediaID) {
        $sql = "SELECT * FROM tblMedia WHERE fldMediaID=" . $inMediaID;
        $query = $this->db->prepare($sql);
        $query->execute();

        
        return $query->fetch(PDO::FETCH_ASSOC);
    }
public function getLinks()
{
    $sql = "SELECT * FROM tblMedia";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}
}
