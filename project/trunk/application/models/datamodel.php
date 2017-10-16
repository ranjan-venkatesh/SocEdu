<?php

class DataModel
{
    
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

   
    public function getAllData()
    {$i=$_SESSION['userid'];
     //   $if=2;
     echo $i;
        $sql = "SELECT * FROM tbldata WHERE fldId=$i";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function updateAlldata()
    {
    $n = $_POST['name'];
    $c = $_POST['sltcombination'];
    $s = $_POST['sltsem'];
    $g = $_POST['sltgender'];
    $col = $_POST['college'];
    $h = $_POST['home'];
    $p = $_POST['phone'];
    $e = $_POST['email'];
    $a = $_POST['about'];
    $i = $_SESSION['userid'];
        $sql = "update tbldata t,tblauthentication a set t.fldName='$n', t.fldStream='$c', t.fldSem='$s', t.fldGender='$g', t.fldCollege='$col', t.fldHome='$h', t.fldPhone='$p', t.fldEmail='$e', t.fldAbout='$a' where t.fldID=a.fldID and t.fldID=" .$i;
        $query = $this->db->prepare($sql);
        $query->execute();
        //return $query->fetchAll();
    }
    public function viewProfile($t)
    {
        $sql = "select * from tbldata where fldId=$t";
        $query=  $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
