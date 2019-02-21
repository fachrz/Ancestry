<?php
namespace Application\Models;
use Core\Database;

class APIModel{
    private $db;
    public function __construct()
    {

        $this->db = new Database;
        
    }
    public function getAPIData()
    {

        $this->db->query("SELECT * FROM user_details");
        return $this->db->resultSet();

    }
    public function setAPIData($indata)
    {   
        $username = $indata['username'];
        $fname = $indata['first_name'];  
        $lname = $indata['last_name'];  
        $gender = $indata['gender'];  
        $password = $indata['password'];  
        $status = $indata['status'];

        $this->db->query("INSERT INTO user_details (user_id, username, first_name, last_name, gender, password, status) 
        VALUES ('', :username, :first_name, :last_name, :gender, :password, :status)");

        $this->db->bind('username', $username);
        $this->db->bind('first_name', $fname);
        $this->db->bind('last_name', $lname);
        $this->db->bind('gender', $gender);
        $this->db->bind('password', $password);
        $this->db->bind('status', $status);

        return $this->db->execute();
    }
}
