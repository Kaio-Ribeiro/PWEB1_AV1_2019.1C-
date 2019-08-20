<?php
    require_once ( "../validacoes/variaveis.php" );
    require_once ( "../validacoes/validar.php" );


    _e($_POST);


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome_completo = _e($_POST["nome_completo"]);
        $email = _e($_POST["email"]);
        $telefone = _e($_POST["telefone"]); 
        $tipo_mensagem = _e($_POST["tipo_mensagem"]);
        @$tipo_cliente = _e($_POST["tipo_cliente"]);  
        $ligacao = _e($_POST["ligacao"]);
        $mensagem_aqui = _e($_POST["mensagem_aqui"]);
        $mostrar_mensagem = true; 
        
    }

    nomeChar(@$nome_completo);
    emailChar(@$email);
    foneChar(@$telefone);
    mensChar(@$mensagem_aqui);
    cliente(@$tipo_cliente);


    function exibir(){
        global $nome_completo, $email, $telefone, $tipo_mensagem, $tipo_cliente, $ligacao, $mensagem_aqui;
        echo $nome_completo;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $telefone;
        echo "<br>";
        echo $tipo_mensagem;
        echo "<br>";
        echo $tipo_cliente;
        echo "<br>";
        echo $ligacao;
        echo "<br>";
        echo $mensagem_aqui;
        
    }

    if($mostrar_mensagem == true){
        exibir();
    }

?>