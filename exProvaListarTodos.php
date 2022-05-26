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
		
		<h1>Listar Todos </h1>
		
		<?php
		$arquivoUsuarios = fopen("Usuarios.txt", "r")  or die("arquivo com problemas");
			echo "Nome;matricula; funcao; <br><br>";
		while (list($nome, $matricula, $funcao) = fgetcsv($arquivoUsuarios, 1000, ";")){
			echo $nome . " "  . $matricula . " "  . $funcao. "<br>";
		}
		fclose($arquivoUsuarios);
		?>
		
	</body>
</html>