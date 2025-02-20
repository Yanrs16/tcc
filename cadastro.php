<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrar.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
<div class="register">
    <form action=" " method="post">
        <h2>Cadastre-se</h2>

        <div>
            <label for="nome"><b>Nome:</b></label><br>
            <input type="text" name="nome" id="nome" required placeholder="Informe seu nome"/>
        </div>
        
        <div>
            <label for="email"><b>E-mail:</b></label><br>
            <input type="text" name="email" id="email" required placeholder="Informe seu e-mail" />
        </div>

        <div>
            <label for="senha"><b>Senha:</b></label><br>
            <input type="password" name="senha" id="senha" required placeholder="Informe a senha"/>
        </div>
        <div>
            <label for="telefone"><b>Telefone:</b></label><br>
            <input type="text" name="telefone" id="telefone" required placeholder="Informe seu telefone" />
        </div>

        <div>
            <label for="cidade"><b>Cidade:</b></label><br>
            <select id="cidade" name="cidade">
                <option value="Samambaia norte">Samambaia Norte</option>
                <option value="Ceilandia">Ceilândia</option>
                <option value="Plano Piloto">Plano Piloto</option>
                <option value="Taguatinga">Taguatinga</option>
                <option value="Águas Claras">Águas Claras</option>
                <!-- Outras opções... -->
            </select>
        </div>

        <div>
            <label for="endereco"><b>Endereço:</b></label><br>
            <input type="text" name="endereco" id="endereco" required placeholder="Informe seu endereço"/>
        </div>

        <div style="grid-column: span 2; text-align: center;">
            <input type="submit" value="Cadastrar">
        </div>

        <div style="grid-column: span 2; text-align: center;">
            <p>Já possui uma conta? <a href="http://localhost/yan/tcc/login.html ">Clique aqui</a></p>
        </div>
    </form>
</div>
</body>
</html>
