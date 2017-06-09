<?php

namespace Possible\Service;

class Database
{      
    public function __construct()
    {     

    }

    public static function getResults($table)
    {   
        $servername = "database";
        $username = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $database = getenv('MYSQL_DATABASE');

        $mysqli = new \mysqli($servername, $username, $password, $database);

        if ($mysqli->connect_errno) {
            return $mysqli->connect_error;
        }

        $sql = 'SELECT * FROM ' . $table;

        $result = $mysqli->query($sql);
        $results = [];
        while ($row = $result->fetch_array(MYSQLI_ASSOC))
        {
            $results[] = $row;
        }
        
        $mysqli->close();
        return $results;
    }

    public static function getRegion($id)
    {
        $servername = "database";
        $username = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $database = getenv('MYSQL_DATABASE');

        $mysqli = new \mysqli($servername, $username, $password, $database);

        if ($mysqli->connect_errno) {
            return $mysqli->connect_error;
        }

        $sql = 'SELECT region_name FROM regions WHERE id = ' . $id;

        $result = $mysqli->query($sql);

        $mysqli->close();

        return end($result->fetch_row());
    }

    public static function getCategory($id)
    {
        $servername = "database";
        $username = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $database = getenv('MYSQL_DATABASE');

        $mysqli = new \mysqli($servername, $username, $password, $database);

        if ($mysqli->connect_errno) {
            return $mysqli->connect_error;
        }

        $sql = 'SELECT name FROM categories WHERE id = ' . $id;

        $result = $mysqli->query($sql);

        $mysqli->close();

        return end($result->fetch_row());
    }
}
