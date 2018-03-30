<!doctype html>
<head>
    <meta charset="UTF-8">
    <link href="css/estilo.css" rel="stylesheet" type="text/css" >
    <link href="css/formulario.css" rel="stylesheet" type="text/css" >
    <title>Document</title>
</head>
<body>
<header>
    <div class="header">
        <img src="imagens/logo.png"/>
        <b><div id="bach">Bacharelado <div class="em">em</div> <div class="sis">Sistemas <div class="de">de</div> Informação<br/></div></b>
    </div>
</header>
<h1 class="titulo_inserir">Insira seus dados</h1>
<form action="../index.php" method="post"> <!-- route('produto.store') -->
    Nome Completo: <br/><input type="text" name="nome" id="" placeholder="digite seu nome completo" required=""><br/>
    C.P.F.: <br/><input type="text" name="titulo" id="" required=""><br/>
    E-mail: <br/><input type="text" name="nquest" id="" required=""><br/>
    Cidade de origem: <br/><input type="text" name="nquest" id="" required=""><br/>
    Usuário: <br/><input type="text" name="nquest" id="" required=""><br/>
    Senha: <br/><input type="text" name="nquest" id="" required=""><br/>

    <input type="hidden" name="acao" value="store">
    <input type="hidden" name="classe" value="atividade">

    <button type="submit">Enviar</button>
</form>
<footer>
    Designer: BSI | &copy; 2018 Sistemas de Informação
</footer>
</body>
</html>