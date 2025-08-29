<?php
    include "cabecalho.php";
    $id = $_GET['id'];
    echo "Código id = $id"
?>
<body>
    <div class="container">
        <h2>ATUALIZAÇÃO DE PRODUTO</h2>
        <?php
            require 'conexao.php';
            $sql = "SELECT * FROM produtos WHERE id =$id";
            $stmt = $pdo->query($sql);
            $produto = $stmt->fetch(PDO::FETCH_ASSOC);


                // echo "ID: " . $produto['id'] . "<br>";
                // echo "Nome: " . $produto['nome'] . "<br>";
                // echo "Preço: R$" . $produto['preco'] . "<br>";
                // echo "Estoque: " . $produto['estoque'] . "<br><br>";
        
        ?>
        <form action="#" method="POST">
            <div class="mb-3">
                Nome: <input value=
                "
                <?php
                    echo $produto['nome'];
                ?>
                "
                 type="text" name="produto" class="form-control">
            </div>
            <div class="mb-3">
                Preço: <input value=
                "
                <?php
                    echo $produto['preco'];
                ?>
                "
                type="text" name="preco" class="form-control">
            </div>
            <div class="mb-3">
                Quantidade: <input value=
                "
                <?php
                    echo $produto['quantidade'];
                ?>
                "
                type="text" name="estoque" class="form-control">
            </div>
            <button type="submit">CADASTRAR</button>   
        </form>
        <a href = "index.php"type="button" class="btn btn-danger">voltar</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>