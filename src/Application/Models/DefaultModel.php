<?php
namespace Application\Models;
use Core\Database;

class DefaultModel{
    private $db;
    public function __construct()
    {

        $this->db = new Database;
        
    }
    public function getData()
    {

        $this->db->query("SELECT * FROM user_details");
        return $this->db->resultSet();

    }
    public function deleteData($user_id)
    {   
        $query = "DELETE FROM user_details WHERE user_id = :userid";

        $this->db->query($query);
        $this->db->bind('userid', $user_id);

        return $this->db->execute("sukses");

    }
    
}
