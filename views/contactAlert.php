<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-04-30
 * Time: 14:25
 */

require_once 'index/header.php';
?>

<div class="alert alert-warning alert-dismissible fade show" role="button">
    <strong>Ваше обращение</strong> успешно отправлено, в ближайщее время с Вами свяжутся!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php
require_once 'contact.php';
require_once 'index/footer.php';
