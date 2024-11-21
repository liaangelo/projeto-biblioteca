<?php
//inclui o arquivo de configuração (conexão  com banco de dados)
include "config.php";
//verifica se a conexão com banco foi bem-sucedida
if (!$conn){
//se a conexão falha,exibe uma mensagem de erro e encerra a execução
    die("falha na conexão ". mysqli_connect_error());
}

//recebe os dados do formulário
$Titulo =$_POST['Titulo'];
$Autor = $_POST['Autor'];
$Editora = $_POST['Editora'];
$Sinopse = $_POST['Snopse'];
$AnoPublicacao= $_POST['AnoPublicacao'];
$Genero = $_POST['Genero'];
$Paginas = $_POST['Paginas'];

//criar variável para inserir o registro 
$sql ="INSERT INTO livros
(Titulo, Autor, Editora, Sinopse, AnoPublicacao, Genero, Paginas) VALUES 
('$Titulo','$Autor','$Editora','$Sinopse','$AnoPublicacao','$Genero','$Paginas')";

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
