<?php
namespace Core;

use Core\Providers\DatabaseServiceProvider;

class Database
{
    private $config;
    private $dbh;
    private $stmt;

    public function __construct()
    {

        $this->loadConfig();

        $database = new DatabaseServiceProvider($this->config['Database']);
        $this->dbh = $database->provide();
        
        
    }
    private function loadConfig()
    {

        $this->config = include(__DIR__ . '/../../config/config.php');

    } 
    public function query($query)
    {

        $this->stmt = $this->dbh->prepare($query);

    }

    public function bind($param, $value, $type = null){

        if ( is_null($type)) {

            switch ( true ) {

                case is_int($value):
                    $type = \PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    $type = \PDO::PARAM_BOOL;
                    break;

                case is_null($value):
                    $type = \PDO::PARAM_NULL;
                    break;
                
                default:
                    $type = \PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {

        $this->stmt->execute();

    }
    
    public function resultSet()
    {

        $this->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function single()
    {

        $this->execute();
        return $this->stmt->fetch(\PDO::FETCH_ASSOC);

    }
}
