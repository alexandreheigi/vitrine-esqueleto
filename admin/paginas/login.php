<?php
    
    if($_POST) {
        $login = $_POST["login"] ?? NULL;
        $senha = $_POST["senha"] ?? NULL;

        $sql = "SELECT id, nome, login, senha
             FROM usuario
             where login = :login AND ativo = 'S'
             limit 1
             ";

        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(":login", $login);
        $consulta->execute();

        $dados = $consulta->fetch(PDO::FETCH_OBJ);

        var_dump($dados);

       

        //if((empty($login)) or (empty($senha))){

        }
    
?>

<div class="login">
    <h1 class="text-center">Efetuar Login</h1>
    <form method="POST">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" class="form-control" required placeholder="Por favor preenha esta campo">

        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" required placeholder="Por favor preenha este campo">
        <br>

        <button type="submit" class="btn btn-success w-100">Efetuar Login</button>

    </form>
</div>