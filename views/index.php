<?php
require "index/header.php";
?>

<div class="container-fluid">
    <div class="row shadow-lg">
        <div class="col m-0 p-0 shadow-lg">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="views/assets/img/slide1.jpg" alt="" width="100%" height="100%" ">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="views/assets/img/slide2.jpg" alt="" width="100%" height="100%">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="views/assets/img/slide3.jpg" alt="" width="100%" height="100%">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>One more for good measure.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row p-4 px-3">
        <div class="col shadow-lg py-3 mx-2 my-2">
            <h2 class="text-md-center">Полезная информация </h2>
            <p class="text-md-center">Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация </p>

        </div>
        <div class="col shadow-lg py-3 mx-2 my-2 bg-dark">
            <h2 class="text-md-center text-white">Полезная информация </h2>
            <p class="text-md-center text-white">Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация </p>

        </div>
        <div class="col py-3 shadow-lg mx-2 my-2">
            <h2 class="text-md-center">Полезная информация </h2>
            <p class="text-md-center">Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация Полезная информация </p>
        </div>
    </div>
</div>

<div class="container-fluid col">
    <div class="row shadow-lg">
        <img src="/sv/views/assets/img/fon1.jpg" class="d-sm-block" alt="">
        <div class="carousel-caption d-none d-sm-block">
            <h1>Заголовок</h1>
            <p>Полезная иноформайия или графики. Полезная иноформайия или графики. Полезная иноформайия или графики.</p>
        </div>
    </div>
</div>


<?php
require "index/footer.php";
?>