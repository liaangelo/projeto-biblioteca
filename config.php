<?php
//configuração de bancos de dados 
 $db_host = "localhost"; //hostname do servidor de bacos de dados 
 $db_user ="root"; // nome de usúario para conectar ao banco de dados 
 $db_pass =""; // senaha para conectar ao bancos de dados (vazio significa sem senha)
 $db_name = "biblioteca"; // nome de bancos de dados a conectar

 // conectar ao bancos de dados
 $conn = new mysqli($db_host, $db_user, $db_pass, $db_name); 
 
 // Verificar se a conexão foi bem-sucedida
 if ($conn->connect_error){
    // Se houver um erro, exibir a mensagem  de erro e encerrara execução do script
    // a seta -> é usada para acessar propriedades e métodos de objetos em PHP, tornando o código mais legível e fácil de manter 
    die("Conexão falhou: {$conn->connect_error}");
 }
 else {
    echo "PARABENS!!! A conexão ao banco de dados ocorreu normalmente!";
 }
