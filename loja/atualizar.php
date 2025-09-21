<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Produto</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset e centralização */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(135deg, #f0f8ff, #e6f2ff);
            text-align: center;
            padding: 20px;
        }

        .card {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 77, 128, 0.15);
            max-width: 450px;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 25px;
            font-size: 1.6rem;
            font-weight: 600;
        }

        .success {
            color: #4CAF8E;
        }

        .error {
            color: #e74c3c;
        }

        p {
            color: #555;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .product-info {
            background-color: #f8fafc;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: left;
            border-left: 4px solid #2C5F9B;
        }

        .product-detail {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
        }

        .detail-label {
            font-weight: 600;
            color: #2C5F9B;
        }

        .btn {
            padding: 14px 25px;
            margin-top: 25px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            color: #fff;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            min-width: 200px;
        }

        .btn-voltar {
            background-color: #2C5F9B;
        }

        .btn-voltar:hover {
            background-color: #234e7e;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Responsividade */
        @media (max-width: 480px) {
            .card {
                padding: 30px 25px;
            }
            
            .icon {
                font-size: 3rem;
            }
            
            .btn {
                width: 100%;
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <?php
    require 'conexao.php';
    
    $id = $_GET['id'];
    $nome = $_POST['produto'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    
    $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $estoque);
    $stmt->bindParam(':id', $id);
    
    $sucesso = $stmt->execute();
    ?>
    
    <div class="card">
        <div class="icon"><?php echo $sucesso ? '✅' : '❌'; ?></div>
        <h2 class="<?php echo $sucesso ? 'success' : 'error'; ?>">
            <?php 
                echo $sucesso ? "Produto atualizado com sucesso!" : "Erro ao atualizar produto.";
            ?>
        </h2>

        <?php if ($sucesso): ?>
        <p>Os dados do produto foram atualizados:</p>
        <div class="product-info">
            <div class="product-detail">
                <span class="detail-label">Nome:</span>
                <span><?php echo htmlspecialchars($nome); ?></span>
            </div>
            <div class="product-detail">
                <span class="detail-label">Preço:</span>
                <span>R$ <?php echo number_format($preco, 2, ',', '.'); ?></span>
            </div>
            <div class="product-detail">
                <span class="detail-label">Estoque:</span>
                <span><?php echo htmlspecialchars($estoque); ?> unidades</span>
            </div>
        </div>
        <?php else: ?>
        <p>Ocorreu um erro durante a atualização. Por favor, tente novamente.</p>
        <?php endif; ?>

        <a href="listar.php" class="btn btn-voltar">Voltar à lista de produtos</a>
    </div>
</body>
</html>