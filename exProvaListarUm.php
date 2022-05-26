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
		
		<h1>Incluir Listar um Usuario </h1>
		
		<form action="exProvaListarUm.php" method=POST>
		Matricula: <input type=text name="matricula" value=''> <br>
		<br><br>
		<input type="submit" value="Incluir">
		</form>
		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$temp = $_POST["matricula"];
			
		$arquivoUsuario = fopen("Usuarios.txt", "r")  or die("arquivo com problemas");
			echo "Nome;matricula; funcao; <br><br>";
		while (list($nome, $matricula, $funcao) = fgetcsv($arquivoUsuario, 1000, ";")){
			if($temp == $matricula){
			echo $nome;
			echo " "  . $matricula;
			echo " "  . $funcao . "<br>";
			
			break;
			}
				}
		fclose($arquivoUsuario);
			}
		?>
		
	</body>
</html>