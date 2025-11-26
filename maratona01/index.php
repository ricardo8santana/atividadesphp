<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 01</title>
</head>
<body>
    <h2>
    <?php 
        $nome = "João!";
        $saudacao = "Bem-vindo ao nosso site";

        echo "Olá, $nome $saudacao";

    
        $celsius°C = 25; 
        $fahrenheit°F = ($celsius°C * 1.8) + 32;
        echo "<br> <br>";
        echo "A temperatura de $celsius°C é igual a $fahrenheit°F.";

         echo "<br> <br>";

         $valorEmprestimo = 2000;
         $taxaJuros = 0.15;
         $numParcelas = 10;

         $valorParcela  = $valorEmprestimo *(1+ $taxaJuros) / $numParcelas;

         echo "O valor do $valorEmprestimo mais $taxaJuros divido por $numParcelas"; 
         echo "<br> <br>";

          $valorReal = 25;
          $valorDolar = 5.32;
          $valorConvertido= ($valorReal / $valorDolar);

          echo(round(5.32) . "<br>");

    
    ?>
    </h2>
</body>
</html>