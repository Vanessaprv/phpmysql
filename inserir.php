<?php include ('funcoes.php');?>

<!DOCTYPE HTML PUBLIC>
<html>
<meta http_equiv="content_type" content="text/html" charset="UTF-8"/>
<html>
<head>
	<title></title>
<meta name="" content="">
</head>
<body>
	
<?php

	if (isset($_POST['enviar'])){
		$NOME= $_POST['NOME'];
		$CPF= $_POST['CPF'];
		$DataNascimento= $_POST['DataNascimento'];
		$SEXO= $_POST['SEXO'];
		$EMAIL= $_POST['EMAIL'];
		$TELEFONE= $_POST['TELEFONE'];
		$sql_inserir = "INSERT INTO clientes (`NOME`,`CPF`,`DataNascimento`,`SEXO`,`EMAIL`,`TELEFONE`) VALUES ('$NOME', '$CPF', '$DataNascimento','$SEXO', '$EMAIL', '$TELEFONE')";
				
		conexao();
		
			if(inserir($sql_inserir)){
				echo ("Registro incluído com sucesso !");
			} else {
				echo ("Erro na inserção");
				}	
	}
	?>
<form  method="POST" enctype="multipart/form-data" action="">
		
		<label>Nome: </label><input type="text" name="NOME"  /><br/>

		<label>CPF: </label><input type="int" name="CPF"  /><br/>

		<label>Data de Nascimento: </label><input type="date" name="DataNascimento"  /><br/>

		<label>Sexo:</label><input type="text" name="SEXO"  /> <br/>
		
		<label>E-mail: </label><input type="text" name="EMAIL"  /><br/>

		<label>Telefone: </label><input type="int" name="TELEFONE"  /><br/>

		<input type="submit" name="enviar" value="Cadastrar"/>

		<input type="submit" name="Voltar" value="Voltar" formaction="index.html">

	</form>


</body>
</html>



