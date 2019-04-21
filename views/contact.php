<?php
require "index/header.php";
?>

<div class="container">
    <div class="row px-3 py-5">
        <div class="col-sm p-4 px-3 shadow-lg py-3 mx-2">
            <h3 class="text-center font-weight-light">Обратная связь</h3>
            <form action="#" method="post">
                <label for="exampleFormControlInput1">Ваше имя:</label>
                <input class="form-control" type="text" placeholder="ФИО" required>
                <label for="exampleFormControlInput1">Название компании:</label>
                <input class="form-control" type="text" placeholder="Введите название компании" required>
                <label for="exampleFormControlInput1">Элетронная почта:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                <label for="exampleFormControlInput1">Номер телефона:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+792344567" required>
                <label for="exampleFormControlTextarea1">Ваше сообщение:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите сообщение" required></textarea>
                <button type="button" class="btn btn-success btn-lg my-3 rounded-pill">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>


<?php
require "index/footer.php";
?>
