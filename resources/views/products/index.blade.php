<!DOCTYPE html>
<html>
<head>
    <title>Produtos e Custos</title>
</head>
<body>
    <h1>Lista de Produtos e seus Custos</h1>

    @foreach ($products as $product)
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <h3>Custos:</h3>
        <ul>
            @foreach ($product->costs as $cost)
                <li>Valor: {{ $cost->cost_value }} - Data: {{ $cost->date }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
