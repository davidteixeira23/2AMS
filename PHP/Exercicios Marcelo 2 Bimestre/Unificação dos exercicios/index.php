<?php
// Arquivo único: index.php
// Sistema Unificado de Calculadoras - Versão Completa

$pagina = isset($_GET['p']) ? $_GET['p'] : 'menu';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Unificado de Calculadoras</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            padding: 30px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            font-size: 2.5em;
        }

        h2 {
            color: #667eea;
            margin-bottom: 20px;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .menu-item {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-decoration: none;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            display: block;
            cursor: pointer;
            border: none;
            width: 100%;
            font-size: 16px;
        }

        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .menu-item h3 {
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .menu-item p {
            font-size: 0.9em;
            opacity: 0.9;
        }

        form {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-top: 20px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"],
        button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: opacity 0.3s;
        }

        input[type="submit"]:hover,
        button:hover {
            opacity: 0.9;
        }

        .resultado {
            background: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
        }

        .resultado-erro {
            background: #ffebee;
            border-left: 4px solid #f44336;
        }

        .back-button {
            display: inline-block;
            background: #6c757d;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            border: none;
            cursor: pointer;
        }

        .back-button:hover {
            background: #5a6268;
        }

        .tabuada-resultado {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            font-family: monospace;
            font-size: 18px;
            line-height: 2;
        }

        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
        }

        .btn-voltar {
            background: #6c757d;
            color: white;
            padding: 8px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-voltar:hover {
            background: #5a6268;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php if ($pagina == 'menu'): ?>
            <!-- MENU PRINCIPAL -->
            <h1>📚 Sistema Unificado de Calculadoras</h1>
            <div class="menu-grid">
                <button onclick="window.location.href='?p=numeros_pares'" class="menu-item">
                    <h3>🔢 Números Pares/Ímpares</h3>
                    <p>Verifique se um número é par ou ímpar</p>
                </button>

                <button onclick="window.location.href='?p=salario_liquido'" class="menu-item">
                    <h3>💰 Salário Líquido</h3>
                    <p>Calcule o salário com bônus e impostos</p>
                </button>

                <button onclick="window.location.href='?p=soma_quadratica'" class="menu-item">
                    <h3>📐 Soma Quadrática</h3>
                    <p>Soma das raízes quadradas de 3 números</p>
                </button>

                <button onclick="window.location.href='?p=troca_variaveis'" class="menu-item">
                    <h3>🔄 Troca de Variáveis</h3>
                    <p>Troque os valores entre duas variáveis</p>
                </button>

                <button onclick="window.location.href='?p=calculadora'" class="menu-item">
                    <h3>🧮 Calculadora</h3>
                    <p>Operações matemáticas básicas</p>
                </button>

                <button onclick="window.location.href='?p=desconto'" class="menu-item">
                    <h3>🏷️ Calculadora de Desconto</h3>
                    <p>Calcule o preço com desconto percentual</p>
                </button>

                <button onclick="window.location.href='?p=maior_numero'" class="menu-item">
                    <h3>🎯 Maior Número</h3>
                    <p>Descubra o maior entre 3 números</p>
                </button>

                <button onclick="window.location.href='?p=media_bimestral'" class="menu-item">
                    <h3>📊 Média Bimestral</h3>
                    <p>Calcule a média e veja se foi aprovado</p>
                </button>

                <button onclick="window.location.href='?p=tabuada'" class="menu-item">
                    <h3>✖️ Tabuada</h3>
                    <p>Gerador de tabuada</p>
                </button>

                <button onclick="window.location.href='?p=notas_aritmeticas'" class="menu-item">
                    <h3>📝 Notas Aritméticas</h3>
                    <p>Sistema de avaliação de alunos</p>
                </button>
            </div>

        <?php elseif ($pagina == 'numeros_pares'): ?>
            <!-- NÚMEROS PARES/ÍMPARES -->
            <div class="header-bar">
                <h2>🔢 Verificador de Números Pares/Ímpares</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" name="n1" placeholder="Digite um número" required>
                <input type="submit" name="verificar_par" value="Verificar">
            </form>
            <?php
            if (isset($_POST['verificar_par']) && isset($_POST['n1'])) {
                $n1 = $_POST['n1'];
                echo "<div class='resultado'>";
                echo ($n1 % 2 == 0) ? "✅ O número $n1 é PAR" : "❌ O número $n1 é ÍMPAR";
                echo "</div>";
            }
            ?>

        <?php elseif ($pagina == 'salario_liquido'): ?>
            <!-- SALÁRIO LÍQUIDO -->
            <div class="header-bar">
                <h2>💰 Calculadora de Salário Líquido</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" step="0.01" name="salario" placeholder="Salário bruto" required>
                <input type="submit" name="calcular_salario" value="Calcular">
            </form>
            <?php
            if (isset($_POST['calcular_salario']) && isset($_POST['salario'])) {
                $salario = $_POST['salario'];
                $bonus = $salario * 0.10;
                $salarioBonificado = $salario + $bonus;
                $imposto = $salarioBonificado * 0.20;
                $salarioLiquido = $salarioBonificado - $imposto;
                echo "<div class='resultado'>";
                echo "Salário bruto: R$ " . number_format($salario, 2) . "<br>";
                echo "Bônus (10%): R$ " . number_format($bonus, 2) . "<br>";
                echo "Imposto (20% sobre o salário bonificado): R$ " . number_format($imposto, 2) . "<br>";
                echo "<strong>💰 Salário líquido: R$ " . number_format($salarioLiquido, 2) . "</strong>";
                echo "</div>";
            }
            ?>

        <?php elseif ($pagina == 'soma_quadratica'): ?>
            <!-- SOMA QUADRÁTICA -->
            <div class="header-bar">
                <h2>📐 Soma Quadrática de 3 Valores</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" step="any" name="num1" placeholder="Primeiro número" required>
                <input type="number" step="any" name="num2" placeholder="Segundo número" required>
                <input type="number" step="any" name="num3" placeholder="Terceiro número" required>
                <input type="submit" name="calcular_soma" value="Calcular">
            </form>
            <?php
            if (isset($_POST['calcular_soma']) && isset($_POST['num1'], $_POST['num2'], $_POST['num3'])) {
                $numero1 = $_POST['num1'];
                $numero2 = $_POST['num2'];
                $numero3 = $_POST['num3'];
                $resultado = sqrt($numero1) + sqrt($numero2) + sqrt($numero3);
                echo "<div class='resultado'>";
                echo "√$numero1 + √$numero2 + √$numero3 = " . number_format($resultado, 4);
                echo "</div>";
            }
            ?>

        <?php elseif ($pagina == 'troca_variaveis'): ?>
            <!-- TROCA DE VARIÁVEIS -->
            <div class="header-bar">
                <h2>🔄 Troca de Variáveis</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" name="var1" placeholder="Primeiro valor" required>
                <input type="number" name="var2" placeholder="Segundo valor" required>
                <input type="submit" name="trocar" value="Trocar">
            </form>
            <?php
            if (isset($_POST['trocar']) && isset($_POST['var1'], $_POST['var2'])) {
                $var1 = $_POST['var1'];
                $var2 = $_POST['var2'];
                echo "<div class='resultado'>";
                echo "Valores originais:<br>";
                echo "Variável 1: $var1<br>";
                echo "Variável 2: $var2<br><br>";
                $temp = $var1;
                $var1 = $var2;
                $var2 = $temp;
                echo "Valores após a troca:<br>";
                echo "Variável 1: $var1<br>";
                echo "Variável 2: $var2";
                echo "</div>";
            }
            ?>

        <?php elseif ($pagina == 'calculadora'): ?>
            <!-- CALCULADORA -->
            <div class="header-bar">
                <h2>🧮 Calculadora</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" step="any" name="n1" placeholder="Primeiro número" required>
                <input type="number" step="any" name="n2" placeholder="Segundo número" required>
                <select name="operadores" required>
                    <option value="somar">➕ Somar</option>
                    <option value="subtrair">➖ Subtrair</option>
                    <option value="multiplicar">✖️ Multiplicar</option>
                    <option value="dividir">➗ Dividir</option>
                </select>
                <input type="submit" name="calcular_op" value="Calcular">
            </form>
            <?php
            if (isset($_POST['calcular_op']) && isset($_POST['n1'], $_POST['n2'], $_POST['operadores'])) {
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $operador = $_POST['operadores'];
                $resultado = null;
                switch ($operador) {
                    case 'somar':
                        $resultado = $n1 + $n2;
                        $simbolo = '+';
                        break;
                    case 'subtrair':
                        $resultado = $n1 - $n2;
                        $simbolo = '-';
                        break;
                    case 'multiplicar':
                        $resultado = $n1 * $n2;
                        $simbolo = '×';
                        break;
                    case 'dividir':
                        if ($n2 != 0) {
                            $resultado = $n1 / $n2;
                            $simbolo = '÷';
                        } else {
                            echo "<div class='resultado resultado-erro'>❌ Erro: Divisão por zero!</div>";
                        }
                        break;
                }
                if ($resultado !== null && ($operador != 'dividir' || ($operador == 'dividir' && $n2 != 0))) {
                    echo "<div class='resultado'>$n1 $simbolo $n2 = " . number_format($resultado, 2) . "</div>";
                }
            }
            ?>

        <?php elseif ($pagina == 'desconto'): ?>
            <!-- DESCONTO -->
            <div class="header-bar">
                <h2>🏷️ Calculadora de Desconto</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" step="0.01" name="preco" placeholder="Preço do produto" required>
                <input type="number" step="0.01" name="desconto" placeholder="Percentual de desconto" required>
                <input type="submit" name="calcular_desconto" value="Calcular">
            </form>
            <?php
            if (isset($_POST['calcular_desconto']) && isset($_POST['preco'], $_POST['desconto'])) {
                $preco = $_POST['preco'];
                $desconto = $_POST['desconto'];
                $valorDesconto = ($preco * $desconto) / 100;
                $resultado = $preco - $valorDesconto;
                echo "<div class='resultado'>";
                echo "Preço original: R$ " . number_format($preco, 2) . "<br>";
                echo "Desconto ($desconto%): R$ " . number_format($valorDesconto, 2) . "<br>";
                echo "<strong>💰 Preço final: R$ " . number_format($resultado, 2) . "</strong>";
                echo "</div>";
            }
            ?>

        <?php elseif ($pagina == 'maior_numero'): ?>
            <!-- MAIOR NÚMERO -->
            <div class="header-bar">
                <h2>🎯 Descubra o Maior Número</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" name="n1" placeholder="Primeiro número" required>
                <input type="number" name="n2" placeholder="Segundo número" required>
                <input type="number" name="n3" placeholder="Terceiro número" required>
                <input type="submit" name="comparar" value="Comparar">
            </form>
            <?php
            if (isset($_POST['comparar']) && isset($_POST['n1'], $_POST['n2'], $_POST['n3'])) {
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];
                $maior = max($n1, $n2, $n3);
                echo "<div class='resultado'>";
                echo "Números informados: $n1, $n2, $n3<br>";
                echo "🎉 O maior número é: <strong>$maior</strong>";
                echo "</div>";
            }
            ?>

        <?php elseif ($pagina == 'media_bimestral'): ?>
            <!-- MÉDIA BIMESTRAL -->
            <div class="header-bar">
                <h2>📊 Calculadora de Média Bimestral</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" step="0.01" name="nota1" placeholder="Nota 1º Bimestre" required>
                <input type="number" step="0.01" name="nota2" placeholder="Nota 2º Bimestre" required>
                <input type="number" step="0.01" name="nota3" placeholder="Nota 3º Bimestre" required>
                <input type="number" step="0.01" name="nota4" placeholder="Nota 4º Bimestre" required>
                <input type="submit" name="calcular_media" value="Calcular Média">
            </form>
            <?php
            if (isset($_POST['calcular_media']) && isset($_POST['nota1'], $_POST['nota2'], $_POST['nota3'], $_POST['nota4'])) {
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];
                $nota4 = $_POST['nota4'];
                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                echo "<div class='resultado'>";
                echo "Média final: " . number_format($media, 2) . "<br>";
                if ($media >= 7) {
                    echo "✅ <strong>APROVADO!</strong> Parabéns!";
                } elseif ($media >= 5) {
                    echo "⚠️ <strong>RECUPERAÇÃO</strong> Estude mais!";
                } else {
                    echo "❌ <strong>REPROVADO</strong>";
                }
                echo "</div>";
            }
            ?>

        <?php elseif ($pagina == 'tabuada'): ?>
            <!-- TABUADA -->
            <div class="header-bar">
                <h2>✖️ Gerador de Tabuada</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="number" name="num1" placeholder="Digite um número" required>
                <input type="submit" name="gerar_tabuada" value="Gerar Tabuada">
            </form>
            <?php
            if (isset($_POST['gerar_tabuada']) && isset($_POST['num1'])) {
                $num1 = $_POST['num1'];
                echo "<div class='tabuada-resultado'>";
                echo "<h3>Tabuada do $num1</h3>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "$num1 × $i = " . ($num1 * $i) . "<br>";
                }
                echo "</div>";
            }
            ?>

        <?php elseif ($pagina == 'notas_aritmeticas'): ?>
            <!-- NOTAS ARITMÉTICAS -->
            <div class="header-bar">
                <h2>📝 Sistema de Avaliação de Alunos</h2>
                <a href="?p=menu" class="btn-voltar">← Voltar</a>
            </div>
            <form method="POST">
                <input type="text" name="aluno" placeholder="Nome do aluno" required>
                <input type="number" step="0.01" name="n1" placeholder="Nota 1" required>
                <input type="number" step="0.01" name="n2" placeholder="Nota 2" required>
                <input type="number" step="0.01" name="n3" placeholder="Nota 3" required>
                <input type="number" step="0.01" name="n4" placeholder="Nota 4" required>
                <input type="submit" name="avaliar" value="Avaliar">
            </form>
            <?php
            if (isset($_POST['avaliar']) && isset($_POST['aluno'], $_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'])) {
                $aluno = $_POST['aluno'];
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];
                $n4 = $_POST['n4'];
                $media = ($n1 + $n2 + $n3 + $n4) / 4;
                echo "<div class='resultado'>";
                echo "Aluno: <strong>" . htmlspecialchars($aluno) . "</strong><br>";
                echo "Média: " . number_format($media, 2) . "<br>";
                if ($media > 6) {
                    echo "✅ APROVADO!";
                } elseif ($media < 3) {
                    echo "❌ REPROVADO!";
                } else {
                    echo "📚 FARÁ EXAME!";
                }
                echo "</div>";
            }
            ?>
        <?php endif; ?>
    </div>
</body>

</html>