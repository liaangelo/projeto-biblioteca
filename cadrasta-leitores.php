<?php
//inclui o arquivo de configuração (conexão  com banco de dados)
include "config.php";
//verifica se a conexão com banco foi bem-sucedida
if (!$conn){
//se a conexão falha,exibe uma mensagem de erro e encerra a execução
    die("falha na conexão ". mysqli_connect_error());
}

//recebe os dados do formulário
$nome =$_POST['nome'];
$dtnasc = $_POST['dtnasc'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$ra = $_POST['ra'];
$endereco = $_POST['endereco'];
$num_end = $_POST['num_end'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];

//criar variável para inserir o registro 
$sql ="INSERT INTO leitores
(Nome, DtNasc, Celular, Email, RA, Endereco, NumEnd, Bairro, CidadeUF) VALUES
('$nome', '$dtnasc', '$celular','$email','$ra','$endereco','$num_end','$bairro', '$cidade')";

//Executa a consulta SQL. Se falhar, exibe o erro do banco dedados
$query = mysqli_query(mysql: $conn,query: $sql) or 
die(mysqli_error($conn));



if($query){
    echo "<center>";
    echo "cadastro realizado com sucesso!!<br>";
    echo"<a href='index.php'><button title='Homme page'>voltar</button></a>";
    echo "</center";
} else{
    echo "<center>";
    echo "<a href='index.php'><button title='Home page'>voltar</button></a";
    echo "</center";
}
?>
