<?php
	session_start(); // iniciar a session e variaveis
	$entrada_salario= $_POST['form_salario']; // pegando os dados do form salario
	$entrada_salario=floatval($entrada_salario);//fazendo parse	 string para float
	$entrada_dependentes = $_POST['form_dependentes'];// pegando os dados do form dependentes
    $entrada_dependentes=floatval($entrada_dependentes);//fazendo parse	 string para float
	$_SESSION['salario_bruto']= $entrada_salario;
	$salario_base_ir=0;//declarando variaveis
    $ret_inss=0;//declarando variaveis
	
	
    	  
  	//fazendo comparação com if
	
	if($entrada_salario >= 0.0 && $entrada_salario <= 1399.12){
		  $ret_inss=($entrada_salario*(8/100));
		    echo " Faixa A: 8% Valor devido de INSS: R$ ".$ret_inss."<br/>";		 	 
	}elseif( $entrada_salario > 1399.12 && $entrada_salario <= 2331.88){
		  $ret_inss=($entrada_salario *(9/100));
		 	 echo " Faixa B:  9%  Valor devido de INSS: R$ ".$ret_inss."<br/>";	  
	}elseif( $entrada_salario >2331.88 && $entrada_salario <= 4663.75){
		  $ret_inss=($entrada_salario *(11/100));
		 	 echo " Faixa C: 11%  Valor devido de INSS: R$ ".$ret_inss."<br/>";	  
	}else{       
	      $ret_inss=($entrada_salario *(11/100));
		 	 echo " Faixa D (teto maximo):11% Valor devido de INSS: R$ ".$ret_inss."<br/>";
				   
	}
	
 ?>
 <?php
	    
		$salario_base_ir=($entrada_salario - $ret_inss);
		$_SESSION['salario_ir'] = $salario_base_ir;
		$_SESSION['n_dependentes'] = $entrada_dependentes;
		$_SESSION['inssliquido']= $ret_inss;
		
		echo ":<hr></hr>";
		
		$salario_base_ir=($entrada_salario - $ret_inss);
		/*echo "<br/> Valor do Salario Bruto: R$ ".$entrada_salario."<br/>";
        $salario_base_ir=($entrada_salario - $ret_inss);
	    echo "<br/>Valor do Salario Base para IRRF: R$ ".$salario_base_ir."<br/>";
	    
		echo "<br/>Valor do Salario base IRRF: R$ ".$_SESSION['salario_ir']."<br/>"; 
		echo "<br/>Quantidade de dependentes: ".$_SESSION['n_dependentes']."<br/>"; 
		echo "<br/>Valor deduzido de INSS: R$ ".$_SESSION['inssliquido']."<br/>";*/
		 
		header("location:calcula_irrf.php");
			
 ?>