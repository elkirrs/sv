<?php
session_start([
    'cookie_lifetime' => 86400
]);
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
                <a class="nav-link" href="comments.php">Комментарии</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="jobs.php">Вакансии</a>
            </li>
            <li class="nav-item">
                <a class="nav-link float-right" href="/sv">Перейти на сайт</a>
            </li>
        </ul>
        <div class="py-3">
            <form action="../model/forms.php" method="post">
                <h5 class=" border-gray pb-2 mb-0">Все вакансии
                    <span class="badge badge-info"><?= $query->countJobs() ;?></span>
                    <button class="btn btn-danger" type="submit" name="deleteJobs">Удалить</button>
                </h5>
        </div>
    </div>
    <div class="container my-3">
            <?php
            foreach ($query->jobs() as $job) :
                ?>
                    <div class="border shadow-sm my-1">
                        <div class="card-header">

                                <h4 class="my-0 font-weight-normal">
                                    <input class="my-0 mx-2" type="checkbox" id="<?= $job['id']; ?>" value="<?= $job['id']; ?>" name="checkJobs[]">
                                    <?= $job['name']; ?>
                                </h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><?= $job['description']; ?></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><?= $job['skills']; ?></li>
                            </ul>
                            <div class="text-right">
                                <small class="text-muted"><?= $job['date']; ?></small>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
    </div>
    </form>
    <div class="container border">
        <div class="p-3">
            <form  action="../model/forms.php" method="POST">
                <label  ">Название вакансии:</label>
                <input type="text" class="form-control" placeholder="Введите название вакансии" name="nameJobs" minlength="3" maxlength="70" required>
                <label >Описание вакансии:</label>
                <textarea class="form-control"  rows="3" placeholder="Введите описание вакансии" name="description" minlength="10" maxlength="2000" required></textarea>
                <label>Ключевые навыки:</label>
                <textarea class="form-control"  rows="3" placeholder="Введите ключевые навыки" name="skills" minlength="10" maxlength="2000" required></textarea>
                <button type="submit" class="btn btn-primary my-3 rounded-pill" name="addJobs">Опубликовать</button>
            </form>
        </div>
    </div>
    </body>


<?php else : ?>
    <?php header('Location: /sv/admin');?>
<?php endif; ?>

