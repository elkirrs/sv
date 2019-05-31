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
        <div class="container-fluid my-3">
            <div class="card-deck text-center col-12">
                <?php
                foreach ($query->jobs() as $job) :
                    ?>
                    <div class="col-4">
                        <div class="border shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal"><?= $job['name']; ?></h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li><?= $job['description']; ?></li>
                                </ul>
                                <div class="text-right">
                                    <button class="btn btn-outline-success float-left" type="button" data-toggle="modal" data-target="#exampleModal">Откликнуться</button>
                                    <small class="text-muted"><?= $job['date']; ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
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
