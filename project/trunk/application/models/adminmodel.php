<?php

class AdminModel {

    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function addCollfeeds() {
        //if(isset($_SESSION['title']) && isset($_SESSION['content']))
        //{  return dont;          
        //}
        //else{
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $_SESSION['title'] = TRUE;
            $_SESSION['content'] = TRUE;
            $t = $_POST['title'];
            $c = $_POST['content'];
            $sql = "INSERT INTO tblcollfeeds " .
                    "(title,content) " .
                    "VALUES " .
                    "('$t','$c');";
            $query = $this->db->prepare($sql);
            $query->execute();
            
            //return did;
            //}
            
        }
    }
    public function addVids()
    {
        if (isset($_POST['title']) && isset($_POST['desc']))
        {
            $t=$_POST['title'];
            $d=$_POST['desc'];
            $sql="INSERT INTO tblMedia " .
                    "(fldName,fldDescription) " .
                    "VALUES " .
                    "('$t','$d');";
            $query = $this->db->prepare($sql);
            $query->execute();
        }
    }
public function removeVids($t) {
    
            $sql = "DELETE FROM tblMedia WHERE fldMediaID=" .$t;
            $query = $this->db->prepare($sql);
            $query->execute();
    
    }

    public function removeCollfeeds($t)
    {
        //if(isset($_POST['title']) )
        //{
           // $t = $_POST['title'];
            //$c = $_POST['content'];
            $sql = "DELETE FROM tblcollfeeds WHERE ID=" .$t;
            $query = $this->db->prepare($sql);
            $query->execute();
           return 1;
        //}
    }

   
    public function addClasslinks() {
        //if(isset($_SESSION['title']) && isset($_SESSION['content']))
        //{  return dont;          
        //}
        //else{
        if (isset($_POST['title']) && isset($_POST['link'])) {
            $_SESSION['title'] = TRUE;
            $_SESSION['link'] = TRUE;
            $t = $_POST['title'];
            $l = $_POST['link'];
            $course = $_POST['sltcourse'];
            $branch = $_POST['sltcombination'];
            $year = $_POST['sltyear'];
            $sql = "INSERT INTO tblclslinks " .
                    "(title,content,course,combination,year) " .
                    "VALUES " .
                    "('$t','$l','$course','$branch','$year');";
            $query = $this->db->prepare($sql);
            $query->execute();
        }
    }
    public function removeClasslinks($t) {
        //if(isset($_SESSION['title']) && isset($_SESSION['content']))
        //{  return dont;          
        //}
        //else{
        //if (isset($_POST['title']) ) {
        //$_SESSION['title'] = TRUE;
            //$_SESSION['link'] = TRUE;
           //$t = $_POST['title'];
         
            $sql = "DELETE  FROM tblclslinks WHERE ID='$t' ";
            $query = $this->db->prepare($sql);
            $query->execute();
        }
    

    public function addUsers() {
        //if(isset($_SESSION['title']) && isset($_SESSION['content']))
        //{  return dont;          
        //}
        //else{
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $u = $_POST['username'];
            $p = $_POST['password'];
            $sql = "INSERT INTO tblauthentication (fldUsername, fldPassword) VALUES ('$u',AES_ENCRYPT('$p','socialedu'))";
            $query = $this->db->prepare($sql);
            $query->execute();
            $sql2= "SELECT fldID FROM tblauthentication where fldUsername='$u' and fldPassword=AES_DECRYPT('$p','socialedu')";
            $query2=  $this->db->prepare($sql2);
            $query2->execute();
            $res=$query2->fetchColumn();
            echo $res;
            $sql3="insert into tbldata (fldId) values ('$res')";
            $query3=$this->db->prepare($sql3);
            $query3->execute();
            }
 else {return 0;}
    }
public function removeUsers($t) {
    
            $sql = "DELETE FROM tblauthentication WHERE fldID=" .$t;
            $query = $this->db->prepare($sql);
            $query->execute();
    
    }
}
