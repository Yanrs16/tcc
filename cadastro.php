<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
<nav>
        <ul>
            <nav>
                <a href="#">Cadastro</a>
                <a href="#">
                <img src="./img/carrinho.png" alt="" class="carrinho">
                </a>
        </ul>
</nav>
    <?php { ?>
    <form method="post" action="">
        <h1>Formulário de Cadastro</h1>
    <label for="nome">Nome Completo:</label>
    <input type="text" name="nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" required placeholder="Digite seu Nome Completo">
    <br><br>
    <label for="telefone">Telefone:</label>
    <input type="tel" name="telefone"value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']; ?>" required placeholder="Digite seu telefone">
    <br><br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha']; ?>" required placeholder="Digite sua Senha">
    <br><br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required placeholder="Digite seu E-mail">
    <br><br>
    <label for="cidade">Cidade:</label>
        <select id="cidade" name="cidade">
            <option value="plano piloto"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='plano piloto') echo 'selected'; ?> >Plano Piloto</option>
            <option value="samambaia norte"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='samambaia norte') echo 'selected'; ?>>Samambaia</option>
            <option value="ceilandia"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='ceilandia') echo 'selected'; ?>>Ceilândia</option>
            <option value="taguatinga"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='taguatinga') echo 'selected'; ?>>Taguatinga</option>
            <option value="santa maria"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='santa maria') echo 'selected'; ?>>Santa Maria</option>
            <option value="sobradinho"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='sobradinho') echo 'selected'; ?>>Sobradinho</option>
            <option value="planaltina"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='planaltina') echo 'selected'; ?>>Planaltina</option>
            <option value="guará"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='guará') echo 'selected'; ?>>Guará</option>
            <option value="itapoã"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='itapoã') echo 'selected'; ?>>Itapoã</option>
            <option value="paranoá"<?php if(isset($_POST['cidade']) && $_POST['cidade'] =='paranoá') echo 'selected'; ?>>Paranoá</option>
        </select>
    <br><br>
    <label for="endereco">Endereço(Rua,AV):</label>
    <input type="text" name="endereco" value="<?php if(isset($_POST['endereco'])) echo $_POST['endereco']; ?>" required placeholder="Digite seu endereço">
    <br><br>
    <label for="numero">Número:</label>
    <input type="number" name="numero" value="<?php if(isset($_POST['numero'])) echo $_POST['numero']; ?>" required placeholder="Digite o numero da casa">
    <br><br>
    <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php } ?>
</body>
</html>