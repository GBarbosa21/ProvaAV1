<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nome = $_POST["nome"];
		$funcao = $_POST["funcao"];
		
		
		if (!file_exists("Usuarios.txt")) {
		$cabecalho = "Nome;matricula; funcao; \n";
		$arquivoUsuarios = fopen("Usuarios.txt", "w");
		fwrite($arquivoUsuarios,$cabecalho);
		fclose($arquivoUsuarios);
		}
		$arquivoUsuarios = fopen("Usuarios.txt", "a") or die("arquivo com problemas");
		$matricula = uniqid();
		$linha = $nome . ";" . $matricula . ";" . $funcao . "\n";
		fwrite($arquivoUsuarios,$linha);
		fclose($arquivoUsuarios);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>

	<body>
		<h1>Menu</h1>
		
		<table>
			<tr>
				<th>
				<a href="exProvaIncluir.php"> Incluir Usuario </a>
				</th>
			</tr>
			<tr>
				<th>
				<a href="exProvaAlterar1.php"> Alterar Usuario <a>
				</th>
			</tr>
			<tr>
				<th">
				<a href="exProvaListarTodos.php"> Listar todos Usuarios</a>
				</th>
			</tr>
			<tr>
				<th>
				<a href="exProvaListarUm.php"> Listar um Usuario </a>
				</th>
			</tr>
			<tr>
				<th>
				<a href="exProvaExcluir.php">Excluir Usuario</a>
				</th>
			</tr>
		</table>
		
		<h1>Incluir Usuario </h1>
		
		<form action="exProvaIncluir.php" method=POST>
		Usuario: <input type=text name="nome" value=''> <br>
		Funcao: <input type=text name="funcao"> <br>
		<br><br>
		<input type="submit" value="Incluir">
		</form>
		
	</body>
</html>