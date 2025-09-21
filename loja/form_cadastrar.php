<?php
    include "cabecalho.php"

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset e alinhamento central */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f0f8ff, #e6f2ff);
            font-family: "Montserrat", sans-serif;
        }

        .container {
            background: #fff;
            padding: 35px 40px;
            border-radius: 12px;
            box-shadow: 0px 6px 18px rgba(0, 77, 128, 0.15);
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        h2 {
            color: #2C5F9B;
            margin-bottom: 25px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        /* Inputs */
        .form-control {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 18px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #4CAF8E;
            box-shadow: 0 0 6px rgba(76, 175, 142, 0.4);
        }

        /* Botão */
        .btn {
            background: #4CAF8E;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 15px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }

        .btn:hover {
            background: #3a8e72;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        /* Melhorias de acessibilidade e detalhes */
        .mb-3 {
            position: relative;
        }
        
        .form-control::placeholder {
            color: #a9a9a9;
        }
        
        .container {
            transition: transform 0.3s ease;
        }
        
        .container:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastre o seu produto!</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do produto" required>
            </div>
            <div class="mb-3">
                <input type="number" step="0.01" name="preco" class="form-control" placeholder="Digite o preço do produto" required>
            </div>
            <div class="mb-3">
                <input type="number" name="estoque" class="form-control" placeholder="Digite a quantidade de produto" required>
            </div>
            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>
</html>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>