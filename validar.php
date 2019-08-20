<?php
    function _e($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function nomeChar($nome_completo){
        if (strlen($nome_completo) < 10) {
            echo "Nome Completo deve ter pelo menos de 10 Caracteres";
            echo "<br>";
            echo "<br>";
            die();
         }
    }
    function emailChar($email){
        if (strlen($email) < 25) {
            echo "Email deve ter pelo menos de 25 Caracteres";
            echo "<br>";
            echo "<br>";
            die();
         }
    }
    function foneChar($telefone){
        if (strlen($telefone) < 11) {
            echo "Telefone precisa inserir DD";
            echo "<br>";

            die();
         }
    }
    function mensChar($mensagem_aqui){
        if (strlen($mensagem_aqui) < 50) {
            echo "Mensagem do cliente precisa ter pelo menos 50 Caracteres";

            die();
         }
    }  
    
    function cliente($tipo_cliente){
        if ($tipo_cliente == "") {
            echo "Marque tipo de cliente";
            die();
         }
    }  
?>
