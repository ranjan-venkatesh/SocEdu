<?php

class ClslinksModel
{
    
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

   
    public function getAllLinks()
    {
        $sql = "SELECT * FROM tblclslinks;";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    
}

