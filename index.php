<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    <div>
        <h1><?php  ?></h1>
        <h3 id="txt1">Bem vindo, <?php echo $_SESSION['nome_user'] ?>!</h3>
        <button id="btn1" onclick="location.href = 'login_entrar.html'">Entrar</button>
        <button id="btn2" onclick="location.href = 'criar_conta.html'">Criar conta</button>
        <form action="deixar_null.php" method="post">
            <button id="btn3" onclick="sair_user()">Sair</button>
        </form>
    </div>
    <script>
        function sair_user() {
            document.getElementById('txt1').style.display = 'none';
            document.getElementById('btn1').style.display = 'block';
            document.getElementById('btn2').style.display = 'block';
            document.getElementById('btn3').style.display = 'none';
    </script>
</body>
</html>
<?php session_start(); ?>

// Se não tiver nada no nome_user ele vai esconder o Bem vindo, nome_user! e esconder os botoes
// E sé tiver algo ele vai esconder os botao é mostrar o bem vindo
<?php 
if ($_SESSION['nome_user'] != null) {
    echo "<script>document.getElementById('btn1').style.display = 'none';</script>";
    echo "<script>document.getElementById('btn2').style.display = 'none';</script>";
    echo "<script>document.getElementById('txt1').style.display = 'block';</script>";
    echo "<script>document.getElementById('btn3').style.display = 'block';</script>";
} else if ($_SESSION['nome_user'] == null) {
    echo "<script>document.getElementById('txt1').style.display = 'none';</script>";
    echo "<script>document.getElementById('btn1').style.display = 'block';</script>";
    echo "<script>document.getElementById('btn2').style.display = 'block';</script>";
    echo "<script>document.getElementById('btn3').style.display = 'none';</script>";
}
?>