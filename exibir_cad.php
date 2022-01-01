<?php
    include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>CRUD | Cadastrados</title>
</head>
<body>
    <div class="container">
        <h3>Listagem Cadastrada</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    
                        $query = "SELECT * FROM `cad_pessoa`";
                        $busca = mysqli_query($conexao, $query);

                        while ($array = mysqli_fetch_array($busca)){
                            $id = $array['id'];
                            $nome = $array['nome'];
                            $email = $array['email'];
                            $telefone = $array['telefone'];
                    ?>
                </tr>
                <tr>
                    <th><?php echo $id ?></th>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $telefone ?></td>
                </tr>
                    <?php
                        }
                    ?>
            </tbody>

        </table>

    </div>
</body>
</html>