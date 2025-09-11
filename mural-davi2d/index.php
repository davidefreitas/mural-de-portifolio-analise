<?php
include "conexao.php";
include "recado.php";

// Processa o envio do formulário
if(isset($_POST['enviar'])){
    $novoRecado = new Recado($_POST['nome'], $_POST['email'], $_POST['mensagem']);
    $novoRecado->salvar($conexao);
    $msgSucesso = "Pedido enviado com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Empresa Fictícia</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div id="main">

    <!-- Cabeçalho -->
    <div id="header">
        <img src="images/logo.png" alt="Logo da Empresa" width="120">
        <h1>Empresa Fictícia</h1>
        <p>Missão: oferecer soluções incríveis aos nossos clientes</p>
    </div>

    <!-- Serviços -->
    <div id="servicos">
        <h2>Serviços</h2>
        <ul>
            <li>Consultoria</li>
            <li>Suporte</li>
            <li>Desenvolvimento de Sistemas</li>
        </ul>
    </div>

    <!-- Formulário de pedidos -->
    <div id="formulario_mural">
        <h2>Deixe seu pedido</h2>
        <?php if(isset($msgSucesso)) echo "<p style='color:green;'>$msgSucesso</p>"; ?>
        <form method="post">
            <label>Nome:</label>
            <input type="text" name="nome" required/><br/>
            <label>Email:</label>
            <input type="text" name="email" required/><br/>
            <label>Pedido / Mensagem:</label>
            <textarea name="mensagem" required></textarea><br/>
            <input type="submit" name="enviar" value="Enviar Pedido" class="btn"/>
        </form>
    </div>

    <!-- Link para moderar os pedidos -->
    <div style="margin-top:20px; text-align:center;">
        <a href="moderar.php" class="btn">Acessar Mural de Pedidos</a>
    </div>

</div>
</body>
</html>
