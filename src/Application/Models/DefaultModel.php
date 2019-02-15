<?php
namespace Application\Models;
use Core\Database;

class DefaultModel{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getAllSiswa(){
        $this->db->query("SELECT * FROM Data_Konter");
        return $this->db->resultSet();
    }
    
}
