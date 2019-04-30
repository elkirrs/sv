<?php
require_once "index/header.php";
?>
<div class="alert alert-warning alert-dismissible fade " role="button" id="collapseExample">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="container my-4">
    <div class="align-items-center p-3 my-3 bg-purple rounded shadow-lg">
        <div class="lh-100">
            <h3 class="mb-0 text-center font-weight-light">Оставте заявку</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row px-2">
        <div class="col-sm p-4 px-3 shadow-lg py-3 mx-2">
            <form action="../model/mail.php" method="POST">
                <label for="exampleFormControlInput1">Ваше имя:</label>
                <input class="form-control" type="text" placeholder="ФИО"  name="userName" required>
                <label for="exampleFormControlInput1">Название компании:</label>
                <input class="form-control" type="text" placeholder="Введите название компании" name="userCompany" required>
                <label for="exampleFormControlInput1">Элетронная почта:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"  name="userEmail" required>
                <label for="exampleFormControlInput1">Номер телефона:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="+792344567" name="userPhone" required>
                <label for="exampleFormControlTextarea1">Ваше сообщение:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите сообщение" name="userMessage" required></textarea>
                <button type="submit" class="btn btn-success btn-lg my-3 rounded-pill" role="button" aria-expanded="false">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>


<?php
require "index/footer.php";
?>
