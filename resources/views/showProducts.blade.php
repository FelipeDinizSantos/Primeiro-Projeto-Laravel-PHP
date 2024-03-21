<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTOS</title>
</head>
<body>
    <table border="1">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product['description']}}</td>
            <td>{{$product['category']}}</td>
            <td>R$ {{$product['price']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>