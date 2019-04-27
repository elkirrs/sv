<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-04-21
 * Time: 02:34
 */
require "index/header.php";
require_once '../controller/Query.php';
?>


<div class="container my-4">
    <div class="align-items-center p-3 my-3 bg-purple rounded shadow-lg">
        <div class="lh-100">
            <h3 class="mb-0 text-center font-weight-light">Вакансии</h3>
        </div>
    </div>
</div>


<div class="container my-4">
    <div class="row mb-2 justify-content-md-center">

        <?php
        foreach ($query->selectJobs() as $job)
        { ?>

        <div class="col-md-9 ">
            <div class="card flex-md-row mb-4 shadow-lg">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block text-dark"><h4>
                            <?php echo $job['Name']; ?>
                        </h4></strong>
                    <p class="card-text mb-3 text-break">
                        <?php echo $job['Description']; ?>
                    </p>
                    <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#exampleModal">Откликнуться</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Форма отклика на вакансию</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
            <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Имя" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Фамилия" required>
                        </div>
                    </div>

                    <div class="form-group row my-2">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="Телефон" required>
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="Должность" required>
                        </div>
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Загрузить резюме</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Отпавить</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php
require "index/footer.php";
?>
