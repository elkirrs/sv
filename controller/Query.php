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
    private $delete;
    private $nameJobs;
    private $description;


    public function __construct()
    {
        $this->requireDatabase();
    }


    public function insert($name, $comment)
    {
        $this->name = $name;
        $this->comment = $comment;

        $insert = "INSERT INTO `reviews` (`name`,`comment`) VALUES ('$this->name','$this->comment')";
        $queryInsert = $this->dbQuery($insert);

        return $queryInsert;
    }


    public function insertJobs($nameJobs, $description)
    {
        $this->nameJobs = $nameJobs;
        $this->description = $description;

        $insert = "INSERT INTO `jobs` (`name`,`description`) VALUES ('$this->nameJobs','$this->description')";
        $queryInsert = $this->dbQuery($insert);

        return $queryInsert;
    }


    public function countAllComments()
    {
        $count = "SELECT count(*) FROM `reviews`";
        $countQuery = $this->dbQuery($count);
        return $countQuery;
    }


    public function allReview()
    {
        foreach ($this->countAllComments() as $count)
        {
            foreach ($count as $all)
            {
                echo $all;
            }
        }
    }


    public function countComments()
    {
        return $this->allReview();
    }


    public function countAllJobs()
    {
        $count = "SELECT count(*) FROM `jobs`";
        $countQuery = $this->dbQuery($count);
        return $countQuery;
    }


    public function allJobs()
    {
        foreach ($this->countAllJobs() as $jobs)
        {
            foreach ($jobs as $job)
            {
                echo $job;
            }
        }
    }


    public function countJobs()
    {
        return $this->allJobs();
    }


    public function selectAllComment()
    {
        $select = "SELECT `name`, `comment` FROM `reviews` ORDER BY id DESC LIMIT 4";
        $selectQuery = $this->dbQuery($select);
        return $selectQuery;
    }


    public function selectAllComments()
    {
        $select = "SELECT `id`, `name`, `comment`, `date` FROM `reviews` ORDER BY id DESC";
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
        $select = "SELECT `id`, `name`, `description`, `date` FROM `jobs` ORDER BY id DESC";
        $selectQueryJobs = $this->dbQuery($select);
        return $selectQueryJobs;

    }


    public function jobs()
    {
        return $this->selectJobs();
    }


    public function authUser()
    {
        $select = "SELECT `user`, `pass` FROM `loginuser`";
        $authuser = $this->dbQuery($select);
        return $authuser;
    }

    public function auth()
    {
        return $this->authUser();
    }


    public function deleteComments($delete)
    {
        $this->delete = $delete;
        $select = 'DELETE FROM `reviews` WHERE id IN('. $this->delete . ')';
        $delete = $this->dbExecute($select);
        return $delete;
    }


    public function deleteJobs($delete)
    {
        $this->delete = $delete;
        $select = 'DELETE FROM `jobs` WHERE id IN('. $this->delete . ')';
        $delete = $this->dbExecute($select);
        return $delete;
    }

}

$query = new Query();