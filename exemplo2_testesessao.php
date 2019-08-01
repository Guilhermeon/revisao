<?php

    session_start();

    if(isset($_SESSION["teste"]))
        {
            echo "Variavel de sessão 'teste' vale: ".$_SESSION["teste"];
            
        }
    else{
        echo "Sessao ainda nao foi iniciada";
    }
?>