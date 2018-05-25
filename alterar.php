
<?php include ('funcoes.php');
conexao();

if(isset($_POST['atualizar'])){
		
		
		$sql_atualizabd= "UPDATE clientes SET
		NOME= '".$_POST['NOME']."',
		CPF= '".$_POST['CPF']."',
		DataNascimento= '".$_POST['DataNascimento']."',
		SEXO= '".$_POST['SEXO']."',
		EMAIL= '".$_POST['EMAIL']."',
		TELEFONE= '".$_POST['TELEFONE']."'
		 WHERE id=".$_POST['id'];

		 atualizar($sql_atualizabd);
         unset ($_POST['atualizar']);
	     unset ($_GET['acao']);
	     unset ($_GET['id']);
}
?>

<!DOCTYPE HTML PUBLIC>
<html>
<meta http_equiv="content_type" content="text/html" charset="UTF-8"/>
<html>
<head>
	<title></title>
<meta name="" content=" ">
</head>
<body>
	<?php 

	if((isset($_GET['acao'])) && ($_GET['acao']=='alterar') && (isset($_GET['id']))) {

		$sql_update= "SELECT * FROM clientes WHERE id=".$_GET['id']." LIMIT 1";
		$rs_atualiza=seleciona($sql_update);
		$res_update=mysqli_fetch_assoc($rs_atualiza); 

			?>		
				<form  method="POST" enctype="multipart/form-data" action="">
				
				<label>Nome: </label><input type="text" name="NOME" value="<?php echo ($res_update['NOME'])?>"  /><br/>

				<label>CPF: </label><input type="int" name="CPF" value="<?php echo ($res_update['CPF']) ?>" /><br/>

				<label>Data de Nascimento: </label><input type="date" name="DataNascimento" value="<?php echo ($res_update['DataNascimento'])?>" /><br/>

				<label>Sexo: </label><input type="text" name="SEXO"  value="<?php echo ($res_update['SEXO']) ?>" /> <br/>
				
				<label>E-mail: </label><input type="text" name="EMAIL" value="<?php echo ($res_update['EMAIL']) ?>" /><br/>

				<label>Telefone: </label><input type="int" name="TELEFONE" value="<?php echo ($res_update['TELEFONE']) ?>"  /><br/>

				<input type="hidden" name="id" value="<?php echo ($res_update['id']) ?>"/>

				<input type="submit" name="atualizar" value="Atualizar"/>
				<input type="submit" name="Voltar" value="Voltar" formaction="index.html">
				</form>	
			
		<?php 
	
}


?>

<ul>
<?php

$sql_seleciona= "SELECT * FROM clientes" ;
$rs_clientes= seleciona($sql_seleciona);
while ( $res=mysqli_fetch_assoc($rs_clientes)) {

	?>
	<li>
		<?php echo ($res['NOME'])?> &nbsp 
		<?php echo ($res['CPF']) ?>&nbsp 
		<?php echo ($res['DataNascimento'])?>&nbsp 
		<?php echo ($res['SEXO']) ?>&nbsp 
		<?php echo ($res['EMAIL']) ?>&nbsp 
		<?php echo ($res['TELEFONE']) ?> |
		<a href="alterar.php?acao=alterar&id=<?php echo ($res['id']) ?>">Alterar</a>
	</li>
	<?php
}
?>
</ul>
</body>
</html>