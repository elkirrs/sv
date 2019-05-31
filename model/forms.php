<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-04-25
 * Time: 02:34
 */

require_once '../controller/Query.php';


$name = htmlspecialchars(trim($_POST['nameCompany']));
$comment = htmlspecialchars(trim($_POST['comment']));


$query->insert("$name", "$comment");


header('Location: /sv/views/reviews.php');

