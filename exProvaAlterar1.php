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
		
		<h1>Alterar Usuario</h1>
		
		<form action="exProvaAlterar1.php" method=POST>
		Nome: <input type=text name="nome" value=''> <br>
		Matricula: <input type=text name="matricula"> <br>
		Funcao: <input type=text name="funcao"> <br>
		<br><br>
		<input type="submit" value="Alterar">
		</form>
		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$temp = $_POST["matricula"];
			$nome = $_POST["nome"];
			$funcao = $_POST["funcao"];
				
		$arquivoUsuario = fopen("Usuarios.txt", "r")  or die("arquivo com problemas");
		$arquivoUsuario2 = fopen("Usuarios2.txt", "w")  or die("arquivo com problemas");
		
		$linha =$nome . ";" . $temp . ";" . $funcao . "\n";
		fwrite($arquivoUsuario2, $linha);
		
		while (list($nome, $matricula, $funcao) = fgetcsv($arquivoUsuario, 1000, ";"))
		{
			if($temp != $matricula){
			$linha = $nome . ";" . $matricula . ";" . $funcao . "\n";
			fwrite($arquivoUsuario2, $linha);
			}
		}
		
			fclose($arquivoUsuario);
			fclose($arquivoUsuario2);
			
			$arquivoUsuario = fopen("Usuarios.txt", "w")  or die("arquivo com problemas");
			$arquivoUsuario2 = fopen("Usuarios2.txt", "r")  or die("arquivo com problemas");
				while (!feof($arquivoUsuario2)) {
                     fwrite($arquivoUsuario, fgets($arquivoUsuario2));
                }
				fclose($arquivoUsuario);
				fclose($arquivoUsuario2);
				unlink("Usuarios2.txt");
			}
		?>
		
	</body>
</html>