<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset e alinhamento central */
        body {
            display: flex;
            justify-content: center;  
            align-items: center;    
            height: 100vh;          
            margin: 0;
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(135deg, #f0f8ff, #e6f2ff);
        }

        .card {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 6px 18px rgba(0, 77, 128, 0.15);
            text-align: center;
            max-width: 400px;
            width: 90%;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        h2 {
            margin-bottom: 25px;
            font-size: 1.4rem;
            color: #2C5F9B;
        }

        .success {
            color: #4CAF8E;
        }

        .error {
            color: #e74c3c;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 20px;
        }

        button {
            padding: 12px 20px;
            border-radius: 8px;
            border: none;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 140px;
        }

        .btn-primary {
            background-color: #4CAF8E;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #3a8e72;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background-color: #2C5F9B;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #234e7e;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">✅</div>
        <h2 class="success">Produto inserido com sucesso!</h2>
        <div class="btn-group">
            <a href="form_cadastrar.php"><button type="button" class="btn-primary">Cadastrar outro</button></a>
            <a href="index.php"><button type="button" class="btn-secondary">Tela inicial</button></a>
        </div>
    </div>
</body>
</html>