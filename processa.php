<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212; /* Fundo escuro */
            color: #eaeaea; /* Texto claro */
            font-family: 'Arial', sans-serif; /* Fonte padrão */
        }
        .container {
            background-color: #1e1e1e; /* Fundo do container */
            border-radius: 8px; /* Bordas arredondadas */
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.5); /* Sombra ao redor */
        }
        .alert {
            background-color: #333; /* Fundo escuro do alerta */
            color: #eaeaea; /* Texto claro */
            border: 1px solid #555; /* Borda cinza */
        }
        .alert-info {
            border-color: #f0e68c; /* Borda dourada */
        }
        .btn-success {
            background-color: #f0e68c; /* Dourado */
            border: 1px solid #e0d98c; /* Borda dourada clara */
            color: #121212; /* Texto escuro */
        }
        .btn-success:hover {
            background-color: #e0d98c; /* Dourado claro */
            border: 1px solid #d1c07f; /* Borda dourada mais clara */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe as notas do formulário
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            // Calcula a média
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            // Determina o conceito e a mensagem
            if ($media > 9) {
                $conceito = 'A';
                $mensagem = 'Aprovado com Louvor';
                $mostrarRecuperacao = false;
            } elseif ($media > 7) {
                $conceito = 'B';
                $mensagem = 'Aluno Aprovado';
                $mostrarRecuperacao = false;
            } elseif ($media > 4) {
                $conceito = 'C';
                $mensagem = 'Recuperação, sua chance de passar';
                $mostrarRecuperacao = true;
            } else {
                $conceito = 'D';
                $mensagem = 'Poxa vida, vamos tentar novamente ano que vem';
                $mostrarRecuperacao = false;
            }

            // Exibe o resultado
            echo "<div class='alert alert-info' role='alert'>
                    <h4 class='alert-heading'>Resultado</h4>
                    <p><strong>Média:</strong> " . number_format($media, 2) . "</p>
                    <p><strong>Conceito:</strong> $conceito</p>
                    <p><strong>Mensagem:</strong> $mensagem</p>
                  </div>";

            // Se o conceito for C, exibe o formulário de recuperação
            if ($mostrarRecuperacao) {
                echo "<div class='mt-4'>
                        <h3>Formulário de Recuperação</h3>
                        <form action='recuperacao.php' method='post'>
                            <input type='hidden' name='media' value='" . number_format($media, 2) . "'>
                            <div class='mb-3'>
                                <label for='notaRecuperacao' class='form-label'>Nota da Recuperação:</label>
                                <input type='number' step='0.01' class='form-control' id='notaRecuperacao' name='notaRecuperacao' required>
                            </div>
                            <button type='submit' class='btn btn-success'>Calcular Recuperação</button>
                        </form>
                      </div>";
            }
        }
        ?>
    </div>
</body>
</html>
