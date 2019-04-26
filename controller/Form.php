<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-04-25
 * Time: 02:34
 */

$name = htmlspecialchars(trim($_POST['nameCompany']));
$comment = htmlspecialchars(trim($_POST['comment']));

require_once 'Query.php';

$query->insert("$name", "$comment");


header('Location: /sv/views/reviews.php');

