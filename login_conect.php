<?php
include("Conect_mysql.php");
$email_txt = $_POST['TxtEmail'];
$senha_txt = $_POST['TxtSenha'];
$sql = mysqli_query($con, "SELECT distinct * FROM site1.site_1 where email = '$email_txt';");
$User_login_email = mysqli_fetch_assoc($sql);
session_start();
$nome_user = $User_login_email['nome'];
$_SESSION['nome_user'] = $nome_user;
if ($User_login_email != null && $senha_txt != null && $email_txt != null && $email_txt == $User_login_email['email'] && $senha_txt == $User_login_email['senha']) {
    echo "<script>location.href = 'index.php'</script>";
} else {
    echo "<script>alert('Erro: Usuario não existe!'); location.href = 'login_entrar.html';</script>";
}