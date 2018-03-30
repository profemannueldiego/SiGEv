<?php
require_once "../Model/Participante.php";
session_start();
if(!isset($_SESSION['POST'])){
    header("location: ../");
}
$lista = $_SESSION['POST'];
unset($_SESSION['POST']);
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="css/estilo.css" rel="stylesheet" type="text/css" >
    <title>Document</title>
</head>
<body>
<header>
    <div class="header">
        <img src="imagens/logo.png"/>
        <b><div id="bach">Bacharelado <div class="em">em</div> <div class="sis">Sistemas <div class="de">de</div> Informação<br/></div></b>
    </div>
</header>
<div class="container">
    <?php
    echo "<h1>Lista de Participantes Cadastrados</h1>";

    echo "
                <div class='frame'>
                    <div class='linha' id='n1'>
                        <span class='autor'>
                            <b>Nome Completo</b>
                        </span>
                        <span class='titulo'>
                            <b>E-mail</b>
                        </span>
                        <span class='nquest'>
                            <b>Cidade de Origem</b>
                        </span>
                        <span class='data'>
                            <b>Data de Cadastro</b>
                        </span>
                    </div>
                ";

    foreach ($lista as $linha){
        $nome = $linha->getNomeCompelto();
        $titulo = $linha->getEmail();
        $nques = $linha->getCidadeOrigem();
        $data = $linha->getDataregistro();
        $data = date('d/m/Y h:i:s', strtotime($data) );
        echo "
                    <div class='linha'>
                        <span class='autor'>
                            <b>$nome</b>
                        </span>
                        <span class='titulo'>
                            <b><a href='$titulo'>$titulo</a></b>
                        </span>
                        <span class='nquest'>
                            <b>$nques</b>
                        </span>
                        <span class='data'>
                            <b>$data</b>
                        </span>
                    </div>
                    ";
    }
    echo "</div>";
    ?>
</div>
<footer>
    Designer: BSI | &copy; 2017 Sistemas de Informação
</footer>
</body>
</html>