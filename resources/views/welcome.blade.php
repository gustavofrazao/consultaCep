<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Consulta Cep</title>

    <!-- css  bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="js/jquery.js"></script>

</head>

<body>

    <div class="col-sm-12">
        <form class="row g-3">
            <div class="col-sm-6">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o cep desejado.">
            </div>

            <div class="col-sm-6">
                <button type="button" class="btn btn-primary" id="pesquisar">Pesquisar</button>
            </div>

        </form>
    </div>

    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-warning">
        <strong id="msg-warning"></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

</body>

</html>