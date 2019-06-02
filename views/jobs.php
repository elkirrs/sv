<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-04-21
 * Time: 02:34
 */
session_start();
require "index/header.php";
require_once '../controller/Query.php';
?>

<?php if ($query->countJobs() > 0) : ?>

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
                <?php
                foreach ($query->jobs() as $job) :
                    ?>
                    <form action="../model/forms.php" method="GET">
                        <div class="border shadow-sm my-1">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal"><?= $job['name']; ?></h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li><?= mb_substr($job['description'], 0, 270) . '... '; ?></li>
                                </ul>
                                <div class="text-right">
                                    <button class="btn btn-outline-success float-left" type="submit" name="jobId" value="<?= $job['id'] ;?>">Просмотреть >></button>
                                    <small class="text-muted"><?= $job['date']; ?></small>
                                </div>
                            </div>
                        </div>

                    </form>
                <?php endforeach; ?>
        </div>
    </div>
</div>

<?php else : ?>
<div class="container my-4">
    <div class="align-items-center p-3 my-3 bg-purple rounded shadow-lg">
        <div class="lh-100">
            <h3 class="mb-0 text-center font-weight-light">
                К сожалению в настоящее время нет вакансий
            </h3>
        </div>
    </div>


<?php endif; ?>
<?php
require "index/footer.php";
?>
