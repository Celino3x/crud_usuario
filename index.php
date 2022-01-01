<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>CRUD</title>
</head>
<body>
    <div class="container">
        <div class="container insert_ok">
            <h3>Cadastro</h3>
            <div class="alig"><img src="img/cat.gif" alt=""></div>
        </div>

            <form action="preview.php" method="post">
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="email" name="email" class="form-control" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="tel" name="telefone" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4}" placeholder="(21) 99999-9999" class="form-control" required autocomplete="off">
                </div>

                <div class="form-cad bt">
                <input class="btn btn-dark enviar" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>