<?php
include("Conect_mysql.php");
$nome_txt = $_POST['nome'];
$email_txt = $_POST['email'];
$senha_txt = $_POST['senha'];
$sql = mysqli_query($con, "SELECT * FROM site1.site_1 where email = '$email_txt';");
$User_login_email = mysqli_fetch_assoc($sql);

if ($User_login_email['email'] == $email_txt && $nome_txt == $$User_login_email['nome']) {
    echo "
    <script>
        alert('Erro: Usuario já existe!');
        location.href = 'criar_conta.html';
    </script>
    ";
} else if ($nome_txt == null || $email_txt == null || $email_txt == null) {
    echo "<script>alert('Erro: O formulario deve ser preenchido'); location.href = 'criar_conta.html';</script>";
} else if ($con = "INSERT INTO site_1 (nome, email, senha) VALUE ('$nome_txt', '$email_txt', '$senha_txt');" === true) {
    echo "
    <script>
        alert('Usuario cadastrado com sucesso!')
        location.href = 'criar_conta.html';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Erro: Algo deu errado, tente novamente mais tarde')
        location.href = 'criar_conta.html';
    </cript>
    ";
}