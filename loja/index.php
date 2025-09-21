<?php
    include "cabecalho.php"
?>
<body>
    <div class="container">
        <h1>Loja Julio</h1>
        <h2>Aqui tem tudo que você precisa!</h2>

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="form_cadastrar.php" type="button" class="btn">Cadastrar</a>
            <a href="listar.php" type="button" class="btn">Listar</a>
        </div>
    </div>

    <style>
    body {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        background: linear-gradient(135deg, #f5f8ff, #e6ebf0);
    }

    .container {
        margin-top: 80px;
        background: #ffffff;
        padding: 40px 60px;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    }

    h1 {
        color: #2c3e50;
        margin-bottom: 10px;
        font-size: 2.2rem;
    }

    h2 {
        color: #3498db;
        margin-bottom: 30px;
        font-weight: normal;
    }

    .btn-group {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 8px;
        border: 2px solid #3498db;
        background: transparent;
        color: #3498db;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background: #3498db;
        color: #fff;
    }
</style>
</body>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>
