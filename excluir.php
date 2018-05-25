
<?php include ('funcoes.php');
conexao();

if((isset($_GET['acao'])) && ($_GET['acao']=='excluir') && (isset($_GET['id']))){
        
        
        $sql_deletar =  "DELETE FROM clientes 
         WHERE id=".$_GET['id'];

         excluir($sql_deletar);
         
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
        <a href="excluir.php?acao=excluir&id=<?php echo ($res['id']) ?>">Excluir</a>
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