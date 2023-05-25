<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: http://localhost/flores3/login.php");
} else {
    include_once "ajax14.html";
}
?>