<html>
	<head>
		<title> Usuario </title>
	</head>
	<body>
		<p align="center">
		<?php 
			$id=$_GET['id'];
			require('conexao.php');
			$select= "SELECT id, nome, email, senha from usuarios where id ='$id' ";
			$result = mysqli_query($db,$select);
			if(!$result){
			die (mysql_error());
			}
			$row = mysqli_fetch_assoc($result);
		?>
		<?php
			session_start();	
			echo "Olá, ". $_SESSION['usuarioNome'], " Seja Bem Vindo!";	
		?>
		</p>
			<br><br><br>
			Acessar Loja: <a href="COMPRA_PRODUTOS\index.php">Clique aqui para acessar</a><br>
			<br>
			<table border="0">
				<tr>
					<td width="25">
						Editar informações de usuario : 
						</br></br>
						<form action="1.envio_alterar_cliente(1).php" method="GET" />
							Telefone: <input type="text" name="telefone" /> <br><br>
							endereço: <input type="text" name="endereco" /> <br><br>
							CPF: <input type="text" name="cpf" /> <br><br>
							RG: <input type="text" name="rg" /> <br><br> 
							
							<input type="submit" value="Enviar" />
						</form>
					</td>
					<td width="10">
					</td>
					<td width="25">
						Editar Dados do usuario : 
						</br></br>
						<form action="" method="POST" />
							Nome: <input type="text" name="nome" /> <br><br>
							Email: <input type="text" name="email" /> <br><br>
							Senha: <input type="text" name="senha" /> <br><br>
							<input type="submit" value="Enviar" />
						</form>
					</td>
				</tr>	
			</table>
			<a href="sair.php">Sair da sua conta</a>				
		
	</body>
</html>