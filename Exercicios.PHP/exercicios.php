<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercícios PHP</title>

<style>
body{
    font-family: 'Segoe UI', sans-serif;
    background: #111;
    padding: 30px;
    margin: 0;
}

h1{
    text-align: center;
    color: #ffffff;
    margin-bottom: 40px;
    font-size: 38px;
    text-shadow: 0 0 10px rgba(255,0,0,0.3);
}

.box{
    background: #1a1a1a;
    width: 90%;
    max-width: 900px;
    margin: 25px auto;
    border-radius: 25px;
    overflow: hidden;
    border: 1px solid #333;
    box-shadow: 0 8px 20px rgba(255, 0, 0, 0.15);
}

.box h2{
    margin: 0;
    padding: 18px;
    background: linear-gradient(90deg, #8b0000, #ff0000);
    color: white;
    font-size: 22px;
}

form{
    padding: 20px;
}

input,
select{
    width: 100%;
    padding: 14px;
    margin-bottom: 12px;
    border: 2px solid #444;
    background: #2a2a2a;
    color: #fff;
    border-radius: 15px;
    box-sizing: border-box;
    font-size: 15px;
}

input::placeholder{
    color: #aaa;
}

input:focus,
select:focus{
    outline: none;
    border-color: #ff0000;
    box-shadow: 0 0 8px rgba(255,0,0,0.4);
}

button{
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 15px;
    background: linear-gradient(90deg, #8b0000, #ff0000);
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover{
    transform: scale(1.02);
    box-shadow: 0 0 15px rgba(255,0,0,0.4);
}

.resultado{
    margin: 20px;
    padding: 15px;
    background: #222;
    border-left: 5px solid #ff0000;
    border-radius: 12px;
    color: #ffffff;
}

hr{
    border: none;
    border-top: 1px solid #444;
}
</style>

</head>
<body>

<h1>Lista de Exercícios PHP</h1>

<!-- EXERCÍCIO 1 -->
<div class="box">
    <h2>1 - Tabuada</h2>

    <form method="POST">
        <input type="number" name="numero_tabuada" placeholder="Digite um número">
        <button type="submit" name="tabuada">Calcular</button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['tabuada'])){
            $numero = $_POST['numero_tabuada'];

            for($i = 1; $i <= 10; $i++){
                echo "$numero x $i = " . ($numero * $i) . "<br>";
            }
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 2 -->
<div class="box">
    <h2>2 - Desconto</h2>

    <form method="POST">
        <input type="number" step="0.01" name="preco" placeholder="Preço">
        <input type="number" step="0.01" name="desconto" placeholder="Desconto %">
        <button type="submit" name="calcular_desconto">Calcular</button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['calcular_desconto'])){
            $preco = $_POST['preco'];
            $porcentagem = $_POST['desconto'];

            $desconto = $preco * ($porcentagem / 100);
            $valor_final = $preco - $desconto;

            echo "Desconto: R$ " . number_format($desconto,2,',','.');
            echo "<br>";
            echo "Valor final: R$ " . number_format($valor_final,2,',','.');
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 3 -->
<div class="box">
    <h2>3 - Aprovação</h2>

    <form method="POST">
<input type="number" step="0.1" name="n1" placeholder="Digite a 1ª nota">
<input type="number" step="0.1" name="n2" placeholder="Digite a 2ª nota">
<input type="number" step="0.1" name="n3" placeholder="Digite a 3ª nota">
<input type="number" step="0.1" name="n4" placeholder="Digite a 4ª nota">

        <button type="submit" name="aprovar">Verificar</button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['aprovar'])){

            $media = (
                $_POST['n1'] +
                $_POST['n2'] +
                $_POST['n3'] +
                $_POST['n4']
            ) / 4;

            if($media >= 5){
                echo "Média: $media - APROVADO";
            }else{
                echo "Média: $media - REPROVADO";
            }
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 5 -->
<div class="box">
    <h2>5 - Soma dos Quadrados</h2>

    <form method="POST">
        <input type="number" name="sq1" placeholder="Digite o 1º número">
<input type="number" name="sq2" placeholder="Digite o 2º número">
<input type="number" name="sq3" placeholder="Digite o 3º número">

        <button type="submit" name="quadrados">Calcular</button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['quadrados'])){

            $resultado =
                ($_POST['sq1'] ** 2) +
                ($_POST['sq2'] ** 2) +
                ($_POST['sq3'] ** 2);

            echo "Resultado: $resultado";
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 6 -->
<div class="box">
    <h2>6 - Salário Líquido</h2>

    <form method="POST">
<input type="number" step="0.01" name="salario" placeholder="Digite o salário">

        <button type="submit" name="salario_liquido">Calcular</button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['salario_liquido'])){

            $salario = $_POST['salario'];

            $gratificacao = $salario * 0.10;
            $imposto = $salario * 0.20;

            $liquido = $salario + $gratificacao - $imposto;

            echo "Salário líquido: R$ " .
            number_format($liquido,2,',','.');
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 7 -->
<div class="box">
    <h2>7 - Situação do Aluno</h2>

    <form method="POST">
        <input type="number" step="0.1" name="a1" placeholder="Digite a 1ª nota">
<input type="number" step="0.1" name="a2" placeholder="Digite a 2ª nota">
<input type="number" step="0.1" name="a3" placeholder="Digite a 3ª nota">
<input type="number" step="0.1" name="a4" placeholder="Digite a 4ª nota">

        <button type="submit" name="situacao">Verificar</button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['situacao'])){

            $media = (
                $_POST['a1'] +
                $_POST['a2'] +
                $_POST['a3'] +
                $_POST['a4']
            ) / 4;

            if($media >= 6){
                $situacao = "Aprovado";
            }elseif($media < 3){
                $situacao = "Retido";
            }else{
                $situacao = "Exame";
            }

            echo "Média: $media <br>";
            echo "Situação: $situacao";
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 8 -->
<div class="box">
    <h2>8 - Maior e Menor Número</h2>

    <form method="POST">
        <input type="number" name="m1" placeholder="Primeiro número">
<input type="number" name="m2" placeholder="Segundo número">
<input type="number" name="m3" placeholder="Terceiro número">

        <button type="submit" name="maior_menor">Verificar</button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['maior_menor'])){

            $a = $_POST['m1'];
            $b = $_POST['m2'];
            $c = $_POST['m3'];

            echo "Maior: " . max($a,$b,$c);
            echo "<br>";
            echo "Menor: " . min($a,$b,$c);
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 9 -->
<div class="box">
    <h2>9 - Soma dos Ímpares</h2>

    <form method="POST">
        <input type="number" name="inicio" placeholder="Número inicial">
<input type="number" name="fim" placeholder="Número final">

        <button type="submit" name="impares">Somar</button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['impares'])){

            $inicio = $_POST['inicio'];
            $fim = $_POST['fim'];

            $soma = 0;

            for($i = $inicio; $i <= $fim; $i++){

                if($i % 2 != 0){
                    $soma += $i;
                }
            }

            echo "Soma dos ímpares: $soma";
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 10 -->
<div class="box">
    <h2>10 - Par ou Ímpar</h2>

    <form method="POST">
        <input type="number" name="parimpar" placeholder="Digite um número">

        <button type="submit" name="verificar_paridade">
            Verificar
        </button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['verificar_paridade'])){

            $numero = $_POST['parimpar'];

            if($numero % 2 == 0){
                echo "Número PAR";
            }else{
                echo "Número ÍMPAR";
            }
        }
        ?>
    </div>
</div>

<!-- EXERCÍCIO 11 -->
<div class="box">
    <h2>11 - Calculadora</h2>

    <form method="POST">
        <input type="number" step="0.01" name="v1" placeholder="Primeiro valor">
<input type="number" step="0.01" name="v2" placeholder="Segundo valor">

        <select name="operador">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <button type="submit" name="calcular">
            Calcular
        </button>
    </form>

    <div class="resultado">
        <?php
        if(isset($_POST['calcular'])){

            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];
            $op = $_POST['operador'];

            switch($op){

                case "+":
                    $resultado = $v1 + $v2;
                    break;

                case "-":
                    $resultado = $v1 - $v2;
                    break;

                case "*":
                    $resultado = $v1 * $v2;
                    break;

                case "/":
                    if($v2 != 0){
                        $resultado = $v1 / $v2;
                    }else{
                        $resultado = "Erro: divisão por zero";
                    }
                    break;

                default:
                    $resultado = "Operação inválida";
            }

            echo "Resultado: $resultado";
        }
        ?>
    </div>
</div>

</body>
</html>