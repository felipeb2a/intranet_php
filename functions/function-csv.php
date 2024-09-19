<?php 
    //function get2DArrayFromCsv($file,$delimiter,$nomeLista,$searchTitle) { 
    function getListArrayFromCsv($file,$delimiter,$nomeLista,$searchTitle) { 
    	#if (($handle = fopen("lista.csv", "r")) !== FALSE) {
		if (($handle = fopen($file, "r")) !== FALSE) {
	    	$i = 0;	
			echo '<table id="tabela" class="table table-bordered table-docs" cellspacing="2" cellpadding="2">';
			echo '<thead>';
			echo '<tr class="text-center thead-dark">';
			echo '<th colspan="6">';
			echo '<h2 align="center">'."$nomeLista".'</h2>';
			echo '</th>';
			echo '</tr>';
			
			echo '<tr>';
		    echo '<th colspan="6">Pesquisar '."$searchTitle".'</th>';
		    echo '</tr>';
		    echo '<tr>';
		    echo '<th colspan="6"><input type="text" id="txtColuna1"/></th>';
		    echo '</tr>';
			
			echo '</thead>';
			while (($lineArray = fgetcsv($handle, 1000, "$delimiter")) !== FALSE) {
			    echo '<tr class="text-center">';
		        
		        for ($j=0; $j<count($lineArray); $j++) {
		        	#echo '<br />';
					echo '<td class="">';
			           		echo $data2DArray[$i][$j] = $lineArray[$j]; ' <br />\n';
					echo '</td>';
		        }

				echo '</tr>';
		        $i++;
		    }
	    	fclose($handle);
	    } 
		echo '</table>';
	    return $data2DArray; 
    }

    function getListLinkArrayFromCsv($file,$delimiter,$nomeLista,$searchTitle) { 
		if (($handle = fopen($file, "r")) !== FALSE) {
	    	$i = 0;	
			echo '<table id="tabela" class="table table-bordered table-docs" cellspacing="2" cellpadding="2">';
			echo '<thead>';
			echo '<tr class="text-center thead-dark">';
			echo '<th colspan="6">';
			echo '<h2 align="center">'."$nomeLista".'</h2>';
			echo '</th>';
			echo '</tr>';
			
			echo '<tr>';
		    echo '<th colspan="6">Pesquisar '."$searchTitle".'</th>';
		    echo '</tr>';
		    echo '<tr>';
		    echo '<th colspan="6"><input type="text" id="txtColuna1"/></th>';
		    echo '</tr>';
			
			echo '</thead>';
			while (($lineArray = fgetcsv($handle, 1000, "$delimiter")) !== FALSE) {
			    echo '<tr class="text-center">';
		        
		        for ($j=0; $j<count($lineArray); $j++) {
		        	#echo '<br />';
		        	if($j == 1){
						echo '<td class="">';
					        echo $data2DArray[$i][$j] = $lineArray[$j]; ' <br />\n';
						echo '</td>';	

						if($i == 0){
							echo '<td class="align-middle">';
			                    echo 'LINK <br />';
							echo '</td>';
						}
						else{
							echo '<td class="align-middle">';
					       	   	echo '<a href=http://'."$lineArray[$j]".' class="" target="_blank">';
			                       	echo '<i class="bi bi-search icon"></i>';
			                    echo '</a>';
							echo '</td>';
						}
		        	}else{
						echo '<td class="align-middle">';
			        	   		echo $data2DArray[$i][$j] = $lineArray[$j]; ' <br />\n';
						echo '</td>';
		        	}
		        }

				echo '</tr>';
		        $i++;
		    }
	    	fclose($handle);
	    } 
		echo '</table>';
	    return $data2DArray; 
    }


     function getListLinkHttpsArrayFromCsv($file,$delimiter,$nomeLista,$searchTitle) { 
		if (($handle = fopen($file, "r")) !== FALSE) {
	    	$i = 0;	
			echo '<table id="tabela" class="table table-bordered table-docs" cellspacing="2" cellpadding="2">';
			echo '<thead>';
			echo '<tr class="text-center thead-dark">';
			echo '<th colspan="6">';
			echo '<h2 align="center">'."$nomeLista".'</h2>';
			echo '</th>';
			echo '</tr>';
			
			echo '<tr>';
		    echo '<th colspan="6">Pesquisar '."$searchTitle".'</th>';
		    echo '</tr>';
		    echo '<tr>';
		    echo '<th colspan="6"><input type="text" id="txtColuna1"/></th>';
		    echo '</tr>';
			
			echo '</thead>';
			while (($lineArray = fgetcsv($handle, 1000, "$delimiter")) !== FALSE) {
			    echo '<tr class="text-center">';
		        
		        for ($j=0; $j<count($lineArray); $j++) {
		        	#echo '<br />';
		        	if($j == 1){
						echo '<td class="">';
					        echo $data2DArray[$i][$j] = $lineArray[$j]; ' <br />\n';
						echo '</td>';	

						if($i == 0){
							echo '<td class="align-middle">';
			                    echo 'LINK <br />';
							echo '</td>';
						}
						else{
							echo '<td class="align-middle">';
					       	   	echo '<a href='."$lineArray[$j]".' class="" target="_blank">';
			                       	echo '<i class="bi bi-search icon"></i>';
			                    echo '</a>';
							echo '</td>';
						}
		        	}else{
						echo '<td class="align-middle">';
			        	   		echo $data2DArray[$i][$j] = $lineArray[$j]; ' <br />\n';
						echo '</td>';
		        	}
		        }

				echo '</tr>';
		        $i++;
		    }
	    	fclose($handle);
	    } 
		echo '</table>';
	    return $data2DArray; 
    }

    function getListOperadoraArrayFromCsv($file,$delimiter,$nomeLista,$searchTitle) { 
		if (($handle = fopen($file, "r")) !== FALSE) {
	    	$i = 0;	
			echo '<table id="tabela" class="table table-bordered table-docs" cellspacing="2" cellpadding="2">';
			echo '<thead>';
			echo '<tr class="text-center thead-dark">';
			echo '<th colspan="6">';
			echo '<h2 align="center">'."$nomeLista".'</h2>';
			echo '</th>';
			echo '</tr>';
			
			echo '<tr>';
		    echo '<th colspan="6">Pesquisar '."$searchTitle".'</th>';
		    echo '</tr>';
		    echo '<tr>';
		    echo '<th colspan="6"><input type="text" id="txtColuna1"/></th>';
		    echo '</tr>';
			
			echo '</thead>';
			while (($lineArray = fgetcsv($handle, 1000, "$delimiter")) !== FALSE) {
			    echo '<tr class="text-center">';
		        
		         for ($j=0; $j<count($lineArray); $j++) {
		        	#echo '<br />';
					echo '<td class="">';
			           		echo $data2DArray[$i][$j] = $lineArray[$j]; ' <br />\n';
					echo '</td>';
		        }

				echo '</tr>';
		        $i++;
		    }
	    	fclose($handle);
	    } 
		echo '</table>';
	    return $data2DArray; 
    }
?>
