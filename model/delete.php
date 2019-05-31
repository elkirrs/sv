<?php
require_once '../controller/Query.php';

if ($_POST['check'])
{
    $commentId = join(', ', $_POST['check']);
    $query->deletePost($commentId);
    header('Location: ../admin/comments.php');
}
