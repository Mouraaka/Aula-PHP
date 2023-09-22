<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        EXERCICIO 1
    </title>
    <link rel="stylesheet" href="ex1_style.css"/>
    
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
                <input class="form_nome"      type="text"    name="nameinp_nome"      id="idinp_nome"      placeholder="Nome">
                <input class="form_sobrenome"  type="text"    name="nameinp_sobrenome" id="idinp_sobrenome" placeholder="Sobrenome">
                <input class="form_rep"        type="number"  name="nameinp_rep"       id="idinp_rep"       placeholder="Repetições"> 
                <input class="form_enviar" type="submit" name="nameinp_enviar" id="idinp_enviar" value="Enviar">
            </form>


        </div>
            
        <div class="contagem" >
            
            <?php
                if (isset($_POST['nameinp_enviar']) || isset($_POST['nameinp_nome']) || isset($_POST['nameinp_sobrenome']) || isset($_POST['nameinp_rep']) ){
                    
                    $nome = $_POST['nameinp_nome'];
                    $sobrenome = $_POST['nameinp_sobrenome'];
                    $reps = $_POST['nameinp_rep'];

                    for ($i=0; $i <= $reps; $i++){

                        echo "$i - $nome $sobrenome</br>";

                    }

                }
            ?>
            
        </div>
            

    </main>

    <footer>
        <p class="texto_footer" >Unisuam</p>
    </footer>

</body>
</html>