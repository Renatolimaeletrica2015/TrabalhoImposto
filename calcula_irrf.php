	
	<?php
	    session_start();
		$vsal_liquido = $_SESSION['salario_ir']; 
		$ret_irrf=0;
		$ir_desc=0;
		
		/*fazendo com if*/
	 
	
	if($vsal_liquido >= 0.0 && $vsal_liquido <= 1903.98){
		 $ir_desc=($vsal_liquido *(0/100));
		 echo " Faixa A: Isento ".$ir_desc."<br/>";	
	 	 
	}elseif( $vsal_liquido > 1903.98 && $vsal_liquido <= 2826.65){
		 $ir_desc=($vsal_liquido *(7.5/100));
		 	 echo " Faixa B: Valor devido".$ir_desc."<br/>";	
			 
	}elseif( $vsal_liquido > 2826.65 && $vsal_liquido <= 3751.05){
		$ir_desc=($vsal_liquido *(15/100));
		 	echo " Faixa C: Valor devido".$ir_desc."<br/>";	
			
	}elseif( $vsal_liquido > 3751.05 && $vsal_liquido <= 4664.68){
		 $ir_desc=($vsal_liquido *(22.5/100));
		 	       echo " Faixa D: Valor devido".$ir_desc."<br/>";	
				   
	}else{       
	     $ir_desc=($vsal_liquido * (27.5/100));
		 	       echo " Faixa E: Valor devido".$ir_desc."<br/>";
	}	
	$ret_irrf=($vsal_liquido - $ir_desc);		   
	  ?>
	  <?php
	     
	     
		   $_SESSION['desc_ir']= $ir_desc;
	       $_SESSION['salario_liquido']= $_SESSION['salario_bruto']- $_SESSION['desc_ir'];
		
	  	 //vai para a pagina tela_retorna_inss
		 header("location:tela_retorna_inss.php");
	?>	 
		 