<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
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
        .form-label {
            color: #f0e68c; /* Dourado claro */
        }
        .form-control {
            background-color: #333; /* Fundo escuro do campo */
            color: #eaeaea; /* Texto claro */
            border: 1px solid #555; /* Borda cinza */
        }
        .btn-primary {
            background-color: #f0e68c; /* Dourado */
            border: 1px solid #e0d98c; /* Borda dourada clara */
            color: #121212; /* Texto escuro */
        }
        .btn-primary:hover {
            background-color: #e0d98c; /* Dourado claro */
            border: 1px solid #d1c07f; /* Borda dourada mais clara */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Calculadora de Média</h2>
        <form action="processa.php" method="post">
            <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1:</label>
                <input type="number" step="0.01" max="10.0" class="form-control" id="nota1" name="nota1" required>
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2:</label>
                <input type="number" step="0.01" max="10.0" class="form-control" id="nota2" name="nota2" required>
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Nota 3:</label>
                <input type="number" step="0.01" max="10.0" class="form-control" id="nota3" name="nota3" required>
            </div>
            <div class="mb-3">
                <label for="nota4" class="form-label">Nota 4:</label>
                <input type="number" step="0.01" max="10.0" class="form-control" id="nota4" name="nota4" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>
