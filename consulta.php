
<?php include ('funcoes.php');?>

<!DOCTYPE HTML PUBLIC>
<html>
<meta http_equiv="content_type" content="text/html" charset="UTF-8"/>
<html>
<head>
	<title></title>
<meta name="" content=" ">
</head>
<body>
	<ul>

<?php
conexao();

$sql_seleciona= "SELECT * FROM clientes";
$rs_clientes=seleciona($sql_seleciona);
 while ($res=mysqli_fetch_assoc($rs_clientes)){
	?>
	<li>
		<?php echo ($res['NOME'])?> &nbsp &nbsp 
		<?php echo ($res['CPF']) ?>&nbsp &nbsp
		<?php echo ($res['DataNascimento']) ?>&nbsp &nbsp
		<?php echo ($res['SEXO']) ?>&nbsp &nbsp
		<?php echo ($res['EMAIL']) ?>&nbsp &nbsp
		<?php echo ($res['TELEFONE']) ?> 
	</li>

	<?php

}

?>
<form>
	<input type="submit" name="Voltar" value="Voltar" formaction="index.html">
</form>

</ul>
</body>
</html>



