
<?php
	
	function seculoAno($ano){
		if($dois = substr($ano,2,2)=='00'){					
		return substr($ano,0,-2);
		}else
			return substr($ano,0,-2)+1;		
			
	}
	function primoInferior($n){
	if($n<0){
		return 0;	
	}else{
  for($i=1;$i<=$n;$i++){  
    $counter = 0; 
		    
    for($j=1;$j<=$i;$j++){
       if($i % $j==0){ 
           $counter++;
       }
     }

        if($counter==2){
			    print $i." primo <br/>";
			}
	
		}
  } 
}  

function repetido() {
		$i=1;		
		while($i++<=10){
			$array[$i] = rand(1,10);			
		}
		$a = array_count_values($array);
		$re = max($a);
		$numero =  array_search(max($a),$a);
		echo 'o numero '.$numero.' repete '.$re;
}
function contaValor($array){
	foreach(array_count_values($array) as $numero => $valor){
		echo $numero.'  -  '.$valor.PHP_EOL;	
	}
	
}

?>