<?php

require_once 'application/libs/SocEdu/SBUserDTO.php';

class LoginModel {

    
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getlogin() {
     
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if(($_POST['username']=="ranjan@socialedu.org") and ($_POST['password']=="admin"))
            {$_SESSION['admin'] = TRUE;
        return 'admin';
        
            }
            elseif ($this->findUserInDB(SBUserDTO::withLoginDetails($_POST['username'], $_POST['password']))) {
                $_SESSION['login'] = TRUE;
                return 'login';
            }
            else {
                return 'invalid user';
            }
        }
    }

    private function findUserInDB($inUser) {
        $bStatus = FALSE;

        $sql = "SELECT COUNT(*) AS COUNT FROM tblauthentication WHERE fldUsername LIKE '%" . $inUser->getMUserName() . "%' AND fldPassword=AES_ENCRYPT('" . $inUser->getMPassword() . "','" . ENCRYPTION_KEY . "')";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->fetchColumn();
        if ($result == 1) {
            $sql3 = "select a.fldID,d.fldName from tbldata d,tblauthentication a where a.fldID=d.fldID and a.fldUsername='" . $inUser->getMUserName() . "' and a.fldPassword=AES_ENCRYPT('" . $inUser->getMPassword() . "','" . ENCRYPTION_KEY . "')";
            $query3 = $this->db->prepare($sql3);
            $query3->execute();
            $_SESSION['username'] = $query3->fetchColumn(1);
            $sql4= "select a.fldID,d.fldName from tbldata d,tblauthentication a where a.fldID=d.fldID and a.fldUsername='" . $inUser->getMUserName() . "' and a.fldPassword=AES_ENCRYPT('" . $inUser->getMPassword() . "','" . ENCRYPTION_KEY . "')";
            $query4=$this->db->prepare($sql4);
            $query4->execute();
            $_SESSION['userid']=$query4->fetchColumn(0);
            $bStatus = TRUE;
        }
        return $bStatus;
    }
    public function delAllData() {
       
 session_destroy();
        
    }

}
