<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicios.css">   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicos</title>
</head>
<body class="exercicios">
    <header class="cabecalho">
        <h1>Exercicios</h1>
        <h2>Indice dos exercicios</h2>
    </header>
    <nav class="navegacao">
            <a href="{$_GET['dir']}/{$_GET['file']}.php" class=verde> Sem Formataçao</a>
            <a href="index.php" class=vermelho> Voltar</a>
        </nav>
    <main class="pricipal">
        <div class="conteudo">
           <?php  
           //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
           include("{$_GET['dir']}/{$_GET['file']}.php");
           ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & Aluno <?php date ('Y');?>
    </footer>
    
</body>
</html>