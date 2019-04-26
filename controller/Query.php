<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-04-24
 * Time: 00:53
 */


class Query
{
    private $name;
    private $comment;

    public function __construct()
    {
        $this->requireDatabase();
    }

    public function insert($name, $comment)
    {
        $this->name = $name;
        $this->comment = $comment;

        $insert = "INSERT INTO `reviews`(`name`,`comment`) VALUES ('$this->name','$this->comment')";
        $queryInsert = $this->dbQuery($insert);

        return $queryInsert;
    }

    public function count()
    {
        $count = "SELECT count(*) FROM `reviews`";
        return $count;
    }

    public function select()
    {
        $select = "SELECT `name`, `comment` FROM `reviews` ORDER BY id DESC";
        return $select;
    }


    private function dbQuery($sql)
    {
        $db = new Database();
        return $db->query($sql);
    }

    private function dbExecute($sql)
    {
        $db = new Database();
        return $db->execute($sql);
    }

    private function requireDatabase()
    {
        $connect = require_once "Database.php";
        return $connect;
    }

}

$query = new Query();