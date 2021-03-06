<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Hana</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/fonts/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="./js/index.js"></script>
</head>
<h2>{$titulo}</h2>
<div class="btn btn-outline-secondary">
    <a href="../productos">Volver</a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Aroma</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Propiedad</th>
            <th>Duracion</th>
        </tr>
    </thead>
</table>
<ul class="list-group">
    <li class="list-group-item">{$producto->aroma}</li>
    <li class="list-group-item">{$producto->precio}</li>
    <li class="list-group-item">{$producto->nombre}</li>
    <li class="list-group-item">{$producto->propiedad}</li>
    <li class="list-group-item">{$producto->duracion}</li>
</ul>