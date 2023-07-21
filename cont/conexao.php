<?php 

//Inicio de conexao com o banco de dados utilizando PDO

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cont";
$port = "3306";


try {

	//conexão com a porta
	//$conn = new PDO("mysql: host=$host; port=$port; dbname="dbname, $user, $pass);
	//conexao sem porta 
	$conn = new PDO("mysql: host=$host; dbname=" . $dbname, $user, $pass);
	echo " Conexão com o banco realaizado com sucesso!";
	
} catch (PDOException $err) {

	echo "Erro: Conexao com banco de dados não realizado com sucesso. Erro gerado" . $err->getMessage();
	
}

// Fim da conexao com o banco de dados usando PDO

 ?>