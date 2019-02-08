<?php

    namespace Core\Providers;

    class DatabaseServiceProvider extends ServiceProvider
    {
        public function provide(){
            $servername = $this->config['servername'];
            $db_name = $this->config['db_name'];
            $username = $this->config['username'];
            $password = $this->config['password'];

            try {
                $conn = new \PDO("mysql:host=$servername;dbname=$db_name", $username, $password);

                $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);    
            } catch (PDOException $e) {
                die($e->getMessage());
            }
            
            return $conn;
           
        }
    }
    