<?php
session_start();
require_once '../controller/Query.php';


if (isset($_POST['reviews']))
{
    $name = htmlspecialchars(trim($_POST['nameCompany']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    $query->insert("$name", "$comment");
    header('Location: /sv/views/reviews.php');
}


if (isset($_POST['deleteComment']))
{
    if (isset($_POST['checkComments']))
    {
        $commentId = join(', ', $_POST['checkComments']);
        $query->deleteComments($commentId);
        header('Location: ../admin/comments.php');
    }
    else
    {
        header('Location: ../admin/comments.php');
    }
}


if (isset($_POST['singin']))
{
    $loginUser = htmlspecialchars($_POST['userlogin']);
    $passUser = htmlspecialchars($_POST['userpass']);

    foreach ($query->auth() as $login)
    {
        if($login['user'] === $loginUser)
        {
            if ($login['pass'] === $passUser)
            {
                $_SESSION['userName'] = $login['user'];
                var_dump($_SESSION);
                header('Location: /sv/admin/comments.php');
            }
        }
        else
        {
            header('Location: /sv/admin');
        }
    }
}


if (isset($_POST['addJobs']))
{
    $nameJobs = htmlspecialchars(trim($_POST['nameJobs']));
    $description = htmlspecialchars(trim($_POST['description']));
    $skills = htmlspecialchars(trim($_POST['skills']));

    $query->insertJobs("$nameJobs", "$description", "$skills");
    header('Location: /sv/admin/jobs.php');
}


if (isset($_POST['deleteJobs']))
{
    if (isset($_POST['checkJobs']))
    {
        $jobsId = join(', ', $_POST['checkJobs']);
        $query->deleteJobs($jobsId);
        header('Location: ../admin/jobs.php');
    }
    else
    {
        header('Location: ../admin/jobs.php');
    }
}

if  (isset($_GET['jobId']))
{
    $job = $_GET['jobId'];
    header("Location: /sv/views/job.php?id=$job");
}
