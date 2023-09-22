<?php

    session_start();

    if (isset($_POST['nameinp_login'], $_POST['nameinp_senha'])) { 
        if ($_POST['nameinp_login']=='23104994' && $_POST['nameinp_senha']=='CFQDM0402'){
            $_SESSION['usuario'] = $_POST['nameinp_login'];
                header('location: acesso_permitido.php');

        } else {

            header('location: acesso_negado.php');

        }
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
    <link rel="stylesheet" type="text/css" href="ex2_style.css"/>
    
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

            
            <form class="form_infos" action="" method="post" >
                <input class="form_login"      type="text"    name="nameinp_login"      id="idinp_login"      placeholder="Login">
                <input class="form_senha"  type="password"    name="nameinp_senha" id="idinp_senha" placeholder="Senha"> 
                <input class="form_enviar" type="submit" name="nameinp_enviar" id="idinp_enviar" value="Enviar">
            </form>


        </div>
            

    </main>

    <footer>
        <p class="texto_footer" >Unisuam</p>
    </footer>

</body>
</html>