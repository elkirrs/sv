<?php
require '../views/index/head.php';
?>

<body>

<div class="container p-5 text-center">
    <div class="row justify-content-center p-5">
        <form class="form-signin" action="../model/formAuth.php" method="post">
            <h1 class="h3 mb-4 font-weight-normal">Авторизация</h1>
            <label for="inputText" class="sr-only">Логин</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Логин" required="" autofocus="" name="userlogin">
            <label for="inputPassword" class="sr-only">Пароль</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required="" name="userpass">

            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
            <p class="mt-5 mb-3 text-muted">Панель администратора</p>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/sv/views/assets/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>
</html>