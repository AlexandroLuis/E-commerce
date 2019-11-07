<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript"></script>
</head>
<body>
	<?php 
		$id=$_GET['id'];
		$nome=$_GET['nome'];
		$email=$_GET['email'];
		$senha=$_GET['senha'];
		require('conexao.php');
		$alterar ="update usuarios set nome='$nome', email='$email',senha='senha' where id='$id' ";
		mysqli_query($db,$alterar) or die ('Não foi possível alterar');
		echo "<script>alert('Cadastro alterado com sucesso!');
		window.location.href='1.consulta_clientes.php'</script>";
	?>
</body>
</html>