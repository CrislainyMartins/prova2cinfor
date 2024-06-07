<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadastrado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php 
    include "conexao.php";
    $pesquisa = $_POST['busca'] ?? '';
    $sql = "SELECT * FROM usuario WHERE nome LIKE'%$pesquisa%'";
    $dados = mysqli_query($conexao,$sql);
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="busca">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">endereço</th>
                                <th scope="col">telefone</th>
                                <th scope="col">data</th>
                                <th scope="col">email</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($linha = mysqli_fetch_assoc($dados)){
                                $id = $linha['id'];
                                $nome = $linha['nome'];
                                $email = $linha['endereco'];
                                $email = $linha['telefone'];
                                $email = $linha['data'];
                               
                                $email = $linha['email'];

                                echo "<tr>
                                
                                <td>$nome</td>
                                <td>$endereco</td>
                                <td>$telefone</td>
                                <td>$data</td>
                                <td>$email</td>
                                <td width=150px>
                               <a href='editar.php? id=$id' class='btn btn-success btn-sm'>Editar</a>
                               <a href='#' class='btn btn-danger  btn-sm' data-toggle='modal' data-target='#confirma'>Excluir</a>
                               </td>

                             </tr>";

                             }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
   

                
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>