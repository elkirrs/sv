<?php
require '../views/index/head.php';
require_once '../controller/Query.php';
?>
<body>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="comments.php">Комментарии</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="jobs.php">Вакансии</a>
        </li>
    </ul>


    <div class="py-3">
            <form action="../model/delete.php" method="post">
                <h5 class="border-bottom border-gray pb-2 mb-0">Все отзывы
                    <span class="badge badge-info"><?= $query->count();?></span>
                    <button class="btn btn-danger" type="submit" name="delete">Удалить</button>
                </h5>
                <?php
                foreach ($query->selectAllComments() as $comment) { ?>
                    <div class="media text-muted pt-3">
                        <div>
                            <input type="checkbox" id="<?= $comment['id']; ?>" value="<?= $comment['id']; ?>" name="check[]">
                        </div>
                        <div class="col-12">
                            <p class=" media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <strong class="d-block text-gray-dark"><?= $comment['name']; ?></strong>
                                <?= $comment['comment']; ?>
                                <i class="d-block text-gray-dark"><?= $comment['date']; ?></i>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </form>
    </div>
</div>



