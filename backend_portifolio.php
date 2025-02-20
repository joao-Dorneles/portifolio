<?php
$servername = "localhost";
$username = "root";
$password = "";
$database =  "formportifolio";

//criar conexão com o BD
$conn = new mysqli($servername, $username, $password, $database);

//verificar conexão
if($conn->connect_error) {
	die("Conexão falhou: " .
$conn->connect_error);
}

//dados do formulario
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$motivo = $_POST['motivo'];

//query para inserir os dados na tabela
$sql = "INSERT INTO informacoes (nome, telefone, email, motivo)
	VALUES ('$nome', '$telefone', '$email', '$motivo')";
	
if($conn->query($sql) === TRUE) {
	echo "Dados salvos com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . 
$conn->error;
}

$conn->close();
?>