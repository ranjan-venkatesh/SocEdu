<?php

class FeedModel
{
  
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

   
    public function getAllFeeds()
    {
        $sql = "SELECT * FROM tblfeeds ORDER BY id DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    
    public function addFeeds()
    {
        $f=$_POST['newfeed'];
        $a=$_SESSION['username'];
        $b=$_SESSION['userid'];
        $sql = "INSERT INTO tblfeeds (author,content,author_id) VALUES ('$a','$f','$b')";
        $query = $this->db->prepare($sql);
        $query->execute();
    }
    public function getFeed()
    {
        $sql="select * from tblfeeds where ID=(select max(ID) from tblfeeds)";
        $query=  $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    
    
}
