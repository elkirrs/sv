<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-04-20
 * Time: 02:05
 */
require "index/header.php";
?>

<main role="main" class="container my-4">
    <div class="align-items-center p-3 my-3 bg-purple rounded shadow-lg">
        <div class="lh-100">
            <h3 class="mb-0 text-center font-weight-light">Вопрос ответ</h3>
        </div>
    </div>

    <div class="my-4 bg-white rounded shadow-lg">
        <div class="accordion shadow-lg" id="accordionExample">
            <div class="card">
                <div class="card-header" id="heading1">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            Разворачиваемая панель #1
                        </button>
                    </h5>
                </div>

                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading2">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Разворачиваемая панель #2
                        </button>
                    </h5>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading3">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            Разворачиваемая панель #3
                        </button>
                    </h5>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading4">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Разворачиваемая панель #4
                        </button>
                    </h5>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading5">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Разворачиваемая панель #5
                        </button>
                    </h5>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>




<?php
require "index/footer.php";
?>
