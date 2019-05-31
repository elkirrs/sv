<?php

require_once '../controller/Query.php';
require_once '../controller/Database.php';


$data = $_POST;

$loginUser = htmlspecialchars($data['userlogin']);
$passUser = htmlspecialchars($data['userpass']);

foreach ($query->auht() as $login)
{
    if($login['login'] === $loginUser)
    {
        if ($login['pass'] === $passUser)
        {
            $_SESSION['logged'] = $login['login'];
            header('Location: /sv/admin/comments');
        }
    }
}