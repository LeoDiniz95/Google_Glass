<?php
    $link = isset($_REQUEST['link'])?$_REQUEST['link']:'home';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8" />
    <title>Tudo sobre Google Glass</title>

    <link rel="stylesheet" href="_css/estilo.css" />

</head>
    
    <script src="_javascript/funcoes.js">
    </script>

<body>

    <div id="interface">

        <!--    CABEÇALHO    -->
        <header id="cabecalho">
            <hgroup>
                <h1>Google Glass</h1>
                <h2> A revolução do Google está chegando</h2>
            </hgroup>

            <img id="icone" src="_imagens/glass-oculos-preto-peq.png" />

            <!--    MENU    -->
            <nav id="menu">

               <h1>Menu Principal</h1>

               <ul>

                   <li onmouseover="mudaFoto('_imagens/home.png')"  onmouseout="mudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="index.php?link=home">Home</a></li>
                   <li onmouseover="mudaFoto('_imagens/especificacoes.png')"  onmouseout="mudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="index.php?link=specs">Especificações</a></li>
                   <li onmouseover="mudaFoto('_imagens/fotos.png')"  onmouseout="mudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="index.php?link=fotos">Fotos</a></li>
                   <li onmouseover="mudaFoto('_imagens/multimidia.png')"  onmouseout="mudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="index.php?link=multimidia">Multimídia</a></li>
                   <li onmouseover="mudaFoto('_imagens/contato.png')"  onmouseout="mudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="index.php?link=fale-conosco">Fale conosco</a></li>
                   
               </ul>

            </nav><!--      FIM DO MENU      -->

        </header><!--   FIM DO CABEÇALHO   -->
        
        <?php   include($link.'.php') ?>
        
        <footer id="rodape">
            
            <p>
                Copyright&copy; 2019 - by Leonardo Diniz <br />
                <a href="#">Facebook</a> | <a href="https://github.com/LeoDiniz95" target="_blank">Github</a>
            </p>
            
        </footer>

    </div>
</body>

</html>