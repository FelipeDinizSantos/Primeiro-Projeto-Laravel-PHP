<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <script src='/js/index.js' type='module' defer></script>
    <style>
        body{
            font-family: 'Arial';
        }
    </style>
</head>
<body>
    <p> 
        @if($hour > 4 && $hour < 13)
            Bom dia,
        @elseif($hour > 12 && $hour < 19)
            Boa tarde,
        @else
            Boa noite,
        @endif

        @if($lastname === null)
            {{$name}}!    
        @else
            {{$name}} {{$lastname}}!
        @endif
    </p>

    <h1>Selecione a Opção Desejada:</h1>

    <button id='calculator'> Calculadora </button>
    <button id='genaretePessoalData'> Gerar Dados Pessoais </button>
    <button id='getProducts'> Produtos </button>
</body>
</html>