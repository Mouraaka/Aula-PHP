<?php

    session_start();

    if (!isset($_SESSION['usuario'])){

        header('location: acesso_negado.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        EXERCICIO 2
    </title>
    <link rel="stylesheet" href="ac_permitido.css"/>
    
</head>
<body>

    <!-- CABEÇALHO -->
    <header class='cabecalho'>

        <div class='cabecalho-logo'>
            <img class='logo_unisuam' src="IMG'S/unisuam_logo.png" alt="Logo da Unisuam">
        </div>

            <div class='cabecalho-itens'>
                <a class='ex1' href="principal.php">Voltar</a>
            </div>

    </header>

    <!-- CENTRO DA PAG -->
    <main class='pagina-centro'>
    
        <div class="infos">

            
            <h1 class="mensagem">Usuário Autenticado com Sucesso</h1>


        </div>
            

    </main>

    <footer>
        <p class="texto_footer" >Unisuam</p>
    </footer>

</body>
</html>