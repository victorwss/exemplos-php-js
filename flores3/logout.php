<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") die();
session_start();
if (isset($_SESSION["usuario"])) unset($_SESSION["usuario"]);
header("Location: login.php");