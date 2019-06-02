<?php
session_start();
require 'index/header.php';
require_once '../controller/Query.php';
$job = $query->selectJob($_GET['id']);
?>

    <div class="container my-4 shadow-lg">
        <div class="col-7">
            <div class="align-items-center p-3 my-3 bg-purple rounded ">
                <div class="lh-100">
                    <h3 class="mb-0 text-left font-weight-light"><?= $job['name'] ;?></h3>
                </div>
                <div class="lh-100 my-5">
                    <h5 class="mb-0 text-left font-weight-light">Описание</h5>
                    <p class="mb-0 text-left font-weight-light my-2"><?= $job['description'] ;?></p>
                </div>
                <div class="lh-100 my-5">
                    <h5 class="mb-0 text-left font-weight-light">Основные навыки</h5>
                    <p class="mb-0 text-left font-weight-light my-2"><?= $job['skills'] ;?></p>
                </div>
            </div>
        </div>

    </div>



<?php
require 'index/footer.php';
?>