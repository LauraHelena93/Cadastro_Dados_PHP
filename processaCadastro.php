<?php 
$nome = $_POST['nome_completo']; // Responsável por armazenar a informação da variável nome
$idade = $_POST['idade']; // Responsável por armazenar a informação da variável idade
$profissao = $_POST['profissao']; // Responsável por armazenar a informação da variável profissão
$salario = $_POST['salario']; // Responsável por armazenar a informação da variável salário
$experiencia = $_POST['experiencias_anteriores']; // Responsável por armazenar a informação da variável experiências anteriores


// Este comando mostra o texto na tela com ou sem variável, ou seja seria como uma ordem: Escreva

echo "<div class='resultado'>";
    echo "<h1>Cadastro enviado com sucesso!</h1>";
    echo "<h2><p>Seja bem-vinda! $nome</p></h2>";
    echo "<p>Sua idade é: $idade anos</p>";
    echo "<p>Atualmente sua profissão é: $profissao </p>"; 
    echo "<p>Salário pretendido: R$$salario </p>";
    echo "<p>Possui experiências em: $experiencia </p><br>";
    echo "<a href='cadastro.html' class='btn-voltar'>Voltar ao Formulário</a>";
    echo "</div>";

?> 


<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport"content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible"content="ie=edge"> 
<title>Cadastro de Dados</title> 

<!-- Css interno para estilizar as respostas armazenadas pelo PHP-->
<style> 

     .resultado { 
        color: rgb(109, 73, 44);
        background-color: #f2f2f2;
        padding: 10px;
        margin: 50px;
        font-size:large;
        margin-top: 10px;
        margin-bottom: 20px;
        margin-right: 350px;
        margin-left: 350px;
        border-radius: 20px;
        padding: 50px;
        text-align: justify;
        
    }
    .resultado h1 {
        color: rgb(46, 62, 82);
        text-align: center;
    }
    .resultado h2 {
        color: rgb(46, 62, 82);
        text-align: center;
    }
    .btn-voltar { /*estiliza o botão de voltar ao formulário*/
        display: inline-block; /* faz com que o botão seja exibido como um bloco em linha */
        padding: 10px 30px;
        margin-left: 150px;
        background-color: rgb(46, 62, 82); /* Ou a cor do seu projeto */
        color: #ffffff;
        text-decoration: none; /* remove o sublinhado do link */
        border-radius: 5px;
        font-weight: bold; /*deixa texto em negrito*/
    }

    .btn-voltar:hover { /*efeito que muda a cor do botão quando o mouse passa por cima*/
        background-color: rgb(109, 73, 44);
    }
    
</style>
</head>
<!-- Usei css inline para estilizar fundo do HTML-->
<body style="background-color:#b9c7a8"></body> 