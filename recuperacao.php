<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Recuperação</title>
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
        .alert-success {
            border-color: #f0e68c; /* Borda dourada */
        }
        .alert-danger {
            border-color: #f0e68c; /* Borda dourada */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe a média e a nota da recuperação
            $media = $_POST['media'];
            $notaRecuperacao = $_POST['notaRecuperacao'];

            // Calcula a nova média
            $novaMedia = ($media + $notaRecuperacao);

            // Determina se foi aprovado ou reprovado
            if ($novaMedia >= 10) {
                $mensagem = 'Parabéns! Você foi aprovado na recuperação.';
                $alertClass = 'alert-success';
            } else {
                $mensagem = 'Infelizmente, você não passou na recuperação. Vamos tentar novamente no próximo ano.';
                $alertClass = 'alert-danger';
            }

            // Exibe o resultado
            echo "<div class='alert $alertClass mt-4' role='alert'>
                    <h4 class='alert-heading'>Resultado da Recuperação</h4>
                    <p><strong>Média Final:</strong> " . number_format($novaMedia, 2) . "</p>
                    <p><strong>Mensagem:</strong> $mensagem</p>
                  </div>";
        }
        ?>
    </div>
</body>
</html>
