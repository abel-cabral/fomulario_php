<?php
// aqui é chamada a configuração do banco de dados    
include ("./config.php");
// aqui a variável recebe a função
$pdo = kui();
    
    // essas variáveis recebem os valores do formulário através do seu 'name'
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $nascimento = $_POST['nascimento'];
    $sexo = $_POST['sexo'];

     // Prepara o SQL e seus paramentros
        $stmt = $pdo->prepare("INSERT INTO login(nome, sobrenome, email, endereco, bairro, ano_de_nascimento, sexo) VALUES(:nome, :sobrenome, :email, :endereco, :bairro, :ano_de_nascimento, :sexo)");
    // aqui os parâmetros recebem os valores das variáveis
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':ano_de_nascimento', $nascimento);
        $stmt->bindParam(':sexo', $sexo);
        
        // Aqui Gravamos no Banco caso de tudo certo vamos para login, caso nao ficamos em cadastro.
        try {
            $stmt->execute();
            $_SESSION['mensagemStatus'] = "<script>alert('Cadastro Realizado com Sucesso.');</script>";
            
        }
        
        catch (Exception $e) {
            $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
        
        }
?>