<?php
    
    # Primeiro Método
    
    # Definindo as variáveis manualmente
    $Dados1 = array(2,3,5,5,2,1,5,2,6,4,7);
    $Dados2 = array(1,2,5,6,4,8,9,1,4,7,6);
    
    # Definindo as variáveis aleatoriamente
    /*$cont = 0;    
    while ($cont < 10){
        $Dados1[] = rand(0, 15);
        $Dados2[] = rand(0, 15);
        $cont ++;        
    }
    */
    
    $DadosUnicos = array();
    
    foreach ($Dados1 as $value){
        
        $chaveElemento = in_array($value, $DadosUnicos);
        #if($Dados1[$chaveElemento]) == )
        if($chaveElemento == ''){
            $DadosUnicos[] = $value;
        }
        
    }
    foreach ($Dados2 as $value){
        
        $chaveElemento = in_array($value, $DadosUnicos);
        #if($Dados1[$chaveElemento]) == )
        if($chaveElemento == ''){
            $DadosUnicos[] = $value;
        }
        
    }
        
    #var_dump($DadosUnicos);
    
    # Segundo método
    
    $DadosUnicos2 = array_merge($Dados1, $Dados2);
    $DadosUnicos2 = array_unique($DadosUnicos2);
    
    
    var_dump($DadosUnicos2);
    
?>
