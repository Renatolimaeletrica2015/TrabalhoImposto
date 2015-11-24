<?php
	session_start();		
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Descontos do Salario</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8" />	  
	  <link rel="stylesheet" type="text/css" href="MeuEstilo.css"/> 
	  <style>
			  table, th, td {
			                 font-size;14;
			                 background:yellow;
							 border: 1px solid black;
							}
				<a>{color:red}
      </style>
    </head>  
    <body>
	<fieldset>
	    <h1> **Valores** :</h1>
		<table>
		  <tr>
			<th>Salario Bruto</th>
			<th>Salario Base IRRF</th>
		  
			<th>Valor do INSS</th>
			<th>Valor do IRRF</th>
		  	
			<th>Salario Liquido</th>
			<th>Numero de dependentes</th>
		  </tr>
		  <tr>
			<td><?php echo " Valor do Salario Bruto: R$ ".$_SESSION['salario_bruto'];?></td>
			<td><?php echo "Valor do Salario base IRRF: R$ ".$_SESSION['salario_ir'];?></td>
			<td><?php echo " Valor do INSS : R$ ".$_SESSION['inssliquido'];?></td>
			<td><?php echo "Valor do IRRF: R$ ".$_SESSION['desc_ir'];?></td>
			<td><?php echo " Valor do Salario Liquido: R$ ".$_SESSION['salario_liquido'];?></td>
			<td><?php echo "Numero de dependentes:  ".$_SESSION['n_dependentes'];?></td>
		  </tr>
		</table>
		<a href= "form_imposto.html">Voltar!</a>
		<script>
							function fechar() {
							janela = top; 
							janela.opener = top; 
							janela.close();
							}
							</script>
					   <a href="javascript:fechar()">Fechar</a>
			
	
	
	</body>
</html>

   <?php
		unset($_SESSION['salario_ir']);
	?>