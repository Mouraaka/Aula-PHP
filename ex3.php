

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        EXERCICIO 2
    </title>
    <link rel="stylesheet" type="text/css" href="ex3_style.css"/>
    
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

    <div class="resultado">
    <?php
    if (isset($_POST['massa']) && isset($_POST['volume'])) {
        $massa = $_POST['massa'];
        $volume = $_POST['volume'];
        
        if ($volume != 0) {
            $Densidade = $massa / $volume;
            echo "<p style='color: white; '>A Densidade é: $Densidade</p>";
        } else {
            echo "<p style='color: red;'>Erro: O volume não pode ser zero.</p>";
        }
    }
    ?>
</div>

    <!-- CENTRO DA PAG -->
    <main class='pagina-centro'>
    
        <div class="infos">

            <form class="form" method="POST" action="">

                <input class="massa" type="number" name="massa" id="id_massa" placeholder="Insira a Massa.."/>
                <input class="volume" type="number" name="volume" id="id_volume" placeholder="Insira o Volume.."/>
                <input class="enviar" type="submit" value="Enviar">

            </form>
            


        </div>
            

    </main>

    <footer>
        <p class="texto_footer" >Unisuam</p>
    </footer>

</body>
</html>