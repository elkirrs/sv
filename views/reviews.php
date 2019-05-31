<?php
 require_once 'index/header.php';
 require_once '../controller/Query.php';
 ?>

<main role="main" class="container my-4">
    <div class="align-items-center p-3 my-3 bg-purple rounded shadow-lg">
        <div class="lh-100">
            <h3 class="mb-0 text-center font-weight-light">Отзывы наших клиентов</h3>
        </div>
    </div>

    <div class="my-4 p-3 bg-white rounded shadow-lg">


        <a type="button" class="btn btn-warning btn-sm" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
            Все отзывы <span class="badge badge-info"><?= $query->countComments();?></span>
        </a>
        <h6 class="border-bottom border-gray pb-2 mb-0"></h6>

        <?php
        foreach ($query->selectComment() as $review) {
            ?>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect fill="#007bff" width="100%" height="100%"></rect>
                    <text fill="#007bff" dy=".3em" x="50%" y="50%">32x32</text>
                </svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@ <?= $review['name']; ?></strong>
                    <?= $review['comment']; ?>
                </p>
            </div>
            <?php }?>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <?php
                    foreach ($query->selectReview() as $review) {
                        ?>
                        <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                <title>Placeholder</title>
                                <rect fill="#007bff" width="100%" height="100%"></rect>
                                <text fill="#007bff" dy=".3em" x="50%" y="50%">32x32</text>
                            </svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <strong class="d-block text-gray-dark">@ <?= $review['name']; ?></strong>
                                <?= $review['comment']; ?>
                            </p>
                        </div>
                    <?php }?>
            </div>
        </div
    </div>
    </div>
        <small class="d-block text-right mt-2">
                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h5><span class="badge badge-success">Оставить отзыв</span></h5>
                </a>
        </small>
        <div class="collapse my-3" id="collapseExample">
            <div class="card card-body shadow-lg">
                <div class="form-group my-2">
                    <form action="../model/forms.php" method="POST">

                        <label">Название компании</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Введите название компании" name="nameCompany" minlength="3" maxlength="50" required>
                        <label >Введите отзыв</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите сообщение" name="comment" minlength="10" maxlength="3000" required></textarea>
                        <button type="submit" class="btn btn-primary my-3 rounded-pill" name="reviews">Оставить отзыв</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
 require 'index/footer.php';
?>
