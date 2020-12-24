<?php
namespace Hyper\Database\Drivers\Connections;
use Hyper\Database\Drivers\DatabaseConnection;
use PDOException;

class SQLiteConnection implements DatabaseConnection
{
    public $connection_params;
    public function __construct($params)
    {
        $this->connection_params = "sqlite" . ":" . $params['path'];
    }

    public function connect()
    {
        try 
        {
            $connection = new \PDO($this->connection_params);
            return $connection;
        }
        catch(PDOException $e)
        {
            echo 'Conexão falhou: ' . $e->getMessage();
        }
    }
}
?>