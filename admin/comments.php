<?php
session_start();
require '../views/index/head.php';
require_once '../controller/Query.php';
?>

<?php if (isset($_SESSION['userName'])) : ?>
    <nav class="site-header sticky-top py-1 bg-dark">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <h5 class="my-0 mr-md-auto font-weight-normal text-light">Вы авторизованы как <?= $_SESSION['userName']; ?>
                <a href="../model/logaut.php"><button class="btn btn-outline-danger">Выйти</button></a>
            </h5>

        </div>
    </nav>



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
            <form action="../model/forms.php" method="post">
                <h5 class="border-bottom border-gray pb-2 mb-0">Все отзывы
                    <span class="badge badge-info"><?= $query->countComments();?></span>
                    <button class="btn btn-danger" type="submit" name="deleteComment">Удалить</button>
                </h5>
                <?php
                foreach ($query->selectAllComments() as $comment) { ?>
                    <div class="media text-muted pt-3">
                        <div>
                            <input type="checkbox" id="<?= $comment['id']; ?>" value="<?= $comment['id']; ?>" name="checkComments[]">
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


<?php else : ?>
    <?php header('Location: /sv/admin');?>
<?php endif; ?>