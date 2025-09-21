<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset e fonte */
        body {
            font-family: "Montserrat", sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #f0f8ff, #e6f2ff);
            padding: 30px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 30px 35px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 77, 128, 0.15);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h1 {
            text-align: center;
            color: #2C5F9B;
            margin-bottom: 30px;
            font-weight: 600;
            padding-bottom: 15px;
            border-bottom: 2px solid #eaeaea;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        thead th {
            background-color: #2C5F9B;
            color: #fff;
            padding: 14px 16px;
            text-align: left;
            font-weight: 600;
            font-size: 15px;
        }

        tbody td {
            padding: 14px 16px;
            background-color: #f8fafc;
            border-bottom: 1px solid #eaeaea;
            font-size: 14px;
        }

        tbody tr:hover td {
            background-color: #e6f2ff;
            transition: background-color 0.2s ease;
        }

        .btn-group {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .btn-warning {
            background-color: #4CAF8E;
        }

        .btn-warning:hover {
            background-color: #3a8e72;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        /* Adicionando responsividade */
        @media (max-width: 768px) {
            .container {
                padding: 20px 15px;
            }
            
            table {
                display: block;
                overflow-x: auto;
            }
            
            .btn-group {
                flex-direction: column;
            }
            
            .btn {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
               while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $produto['id'] . "</td>";
                echo "<td>" . $produto['nome'] . "</td>";
                echo "<td>" . $produto['preco'] . "</td>";
                echo "<td>" . $produto['quantidade'] . "</td>";
                echo "<td>
                        <div class='btn-group'>
                            <a href='form.atualizar.php?id=".$produto['id']."' class='btn btn-warning'>Atualizar</a>
                            <a href='apagar.php?id=".$produto['id']."' class='btn btn-danger' onclick='return confirm(\"Tem certeza que deseja apagar este produto?\");'>Apagar</a>
                        </div>
                    </td>";
                echo "</tr>";
                }

            ?>
            </tbody>
        </table>
    </div>
</body>
</html>