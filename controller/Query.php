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

    public function countAll()
    {
        $count = "SELECT count(*) FROM `reviews`";
        $countQuery = $this->dbQuery($count);
        return $countQuery;
    }

    public function allReview()
    {
        foreach ($this->countAll() as $count)
        {
            foreach ($count as $all)
            {
                echo $all;
            }
        }
    }

    public function count()
    {
        return $this->allReview();
    }


    public function selectAllComment()
    {
        $select = "SELECT `name`, `comment` FROM `reviews` ORDER BY id DESC LIMIT 4";
        $selectQuery = $this->dbQuery($select);
        return $selectQuery;
    }


    public function selectComment()
    {
        return $this->selectAllComment();
    }

    public function selectAllReview()
    {
        $select = "SELECT `name`, `comment` FROM `reviews` ORDER BY id DESC LIMIT 4,100000";
        $selectQuery = $this->dbQuery($select);
        return $selectQuery;
    }

    public function selectReview()
    {
        return $this->selectAllReview();
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

    public function selectJobs()
    {
        $select = "SELECT `Name`, `Description` FROM `jobs` ORDER BY id DESC";
        $selectQueryJobs = $this->dbQuery($select);
        return $selectQueryJobs;

    }

}

$query = new Query();