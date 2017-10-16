<?php
class UsersModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

   
    public function getAllData()
    {
                
        $sql = "SELECT fldID,fldUsername,AES_DECRYPT(fldPassword,'socialedu') as fldPassword FROM tblauthentication";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
}