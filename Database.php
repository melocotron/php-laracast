<?php

// connect to the database, and execute a query.
class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        http_build_query($config, '', ';'); // host=xxx;port=xxx;dbnam=xxx

        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {


        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}