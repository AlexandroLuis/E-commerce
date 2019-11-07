<meta http-equiv="refresh" content="100; url=index.php">
<?php 


		$nome=$_POST['nome'];
		$senha=$_POST['senha']; 
		$email=$_POST['email'];
				
		$senha = md5($_POST["senha"]);
		
		
		require('conexao.php');
		
		
		$sqlinsert="insert into usuarios values('','$nome','$email','$senha','','','','')";
		mysqli_query($db,$sqlinsert) or die ('Não foi possível inserir');
		echo "<script> alert ('Cadastro realizado com sucesso') </script>";		
		
?>


