<?php
namespace Application\Models;
use Core\Database;

class DefaultModel{
    private $db;
    public function __construct()
    {

        $this->db = new Database;
        
    }
    public function getAllSiswa()
    {

        $this->db->query("SELECT * FROM user_details");
        return $this->db->resultSet();

    }
    public function deleteData($user_id)
    {

        $this->db->query("DELETE FROM user_details WHERE user_id = :userid");
        $this->db->bind('userid', $user_id);

        return $this->db->execute();

    }
    
}
