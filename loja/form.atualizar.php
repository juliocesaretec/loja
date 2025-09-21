<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Produto</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset e centralização */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(135deg, #f0f8ff, #e6f2ff);
            text-align: center;
        }

        .container {
            background: #fff;
            padding: 35px 40px;
            border-radius: 12px;
            box-shadow: 0px 6px 18px rgba(0, 77, 128, 0.15);
            width: 100%;
            max-width: 450px;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h2 {
            color: #2C5F9B;
            margin-bottom: 25px;
            font-size: 1.6rem;
            font-weight: 600;
        }

        /* Labels */
        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2C5F9B;
        }

        /* Inputs */
        .mb-3 {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #4CAF8E;
            box-shadow: 0 0 8px rgba(76, 175, 142, 0.3);
        }

        /* Botão */
        .btn {
            width: 100%;
            background-color: #4CAF8E;
            color: #fff;
            border: none;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #3a8e72;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        /* Melhorias de acessibilidade */
        .form-control::placeholder {
            color: #a9a9a9;
        }
        
        /* Efeito de foco para acessibilidade */
        .btn:focus {
            outline: 2px solid #2C5F9B;
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Atualização de Produto</h2>

        <?php
        require 'conexao.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $stmt = $pdo->query($sql);
        $produto = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <form action="atualizar.php?id=<?php echo $id; ?>" method="POST">
            <div class="mb-3">
                <label for="nome">Nome:</label>
                <input value="<?php echo $produto['nome']; ?>" type="text" name="produto" class="form-control" required id="nome">
            </div>
            <div class="mb-3">
                <label for="preco">Preço:</label>
                <input value="<?php echo $produto['preco']; ?>" type="number" step="0.01" name="preco" class="form-control" required id="preco">
            </div>
            <div class="mb-3">
                <label for="quantidade">Quantidade:</label>
                <input value="<?php echo $produto['quantidade']; ?>" type="number" name="estoque" class="form-control" required id="quantidade">
            </div>
            <button type="submit" class="btn">Atualizar</button>
        </form>
    </div>
</body>
</html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>