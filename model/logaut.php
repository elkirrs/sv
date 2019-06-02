<?php
session_start([
    'cookie_lifetime' => 86400
]);
unset($_SESSION['userName']);
header('Location: /sv/admin');
