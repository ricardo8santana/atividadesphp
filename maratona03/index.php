<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 03</title>
</head>
<body>
      <?php 
          
  $numero = 8;

  echo "<h3>Tabuada do $numero</h3>";

  for ($i = 1; $i <= 10; $i++) {
      $resultado = $numero * $i;
      echo "$numero x $i = $resultado<br>";
  }
//   Crie um programa que receba 10 números inteiros e calcule a média desses 
// números. Utilize o laço for para ler os números e calcular a média
  $soma = 0;

for ($i = 1; $i <= 10; $i++) {
    $numero = (int) readline("Digite o $iº número: ");
    $soma += $numero;
}

$media = $soma / 10;
echo "A média dos números é: $media";

// Exercícios com foreach:
// Crie um programa que tenha um array de nomes de 10 peças de carro e imprima 
// todos os nomes em uma lista
$pecasCarro = [
    "Motor",
    "Embreagem",
    "Freio",
    "Suspensão",
    "Radiador",
    "Alternador",
    "Bateria",
    "Velas",
    "Amortecedor",
    "Escape"
];

echo "<ul>";
foreach ($pecasCarro as $peca) {
    echo "<li>$peca</li>";
}
echo "</ul>";

// Crie um programa que tenha um array associativo com dados de um gato que 
// chegou no petshop, como chave e seu valor. Utilize o foreach para imprimir os 
// nomes dos dados do gato

$gato = [
    "Nome"  => "Mingau",
    "Idade" => "2 anos",
    "Raça"  => "Siamês",
    "Cor"   => "Branco",
    "Peso"  => "4 kg",
    "Sexo"  => "Macho"
];

foreach ($gato as $dado => $valor) {
    echo "$dado: $valor<br>";
}
// Exercícios com funções:
// Crie uma função que receba o valor de uma compra e calcule o desconto de 15%. 
// A função deve retornar o valor com o desconto aplicado.
function calcularDesconto(float $valorCompra): float {
    return $valorCompra * 0.85;
}

$valorFinal = calcularDesconto(200.00);
echo "Valor com desconto: R$ " . number_format($valorFinal, 2, ',', '.');

// Crie uma função que receba um número e determine se ele é primo ou não.

function ehPrimo(int $numero): bool {
    if ($numero <= 1) return false;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    return true;
}

// Exemplo de uso
$numero = 17;
echo ehPrimo($numero) ? "É primo" : "Não é primo";
  ?>
</body>
</html>