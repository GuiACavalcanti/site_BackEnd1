<?php
session_start();
$_SESSION['nome_user'] = null;
header("Location: ./index.php");
die();