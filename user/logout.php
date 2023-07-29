<?php
    session_start();
    unset($_SESSION['a_id']);
    session_destroy();

    header("Location: http://localhost/Itum%20Vehicle%20Issue/welcome.html");
    exit;
?>
