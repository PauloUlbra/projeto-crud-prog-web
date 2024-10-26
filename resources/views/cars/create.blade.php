<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ url('cars.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Marca" required>
        <br>
        <textarea name="description" placeholder="Modelo" required></textarea>
        <br>
        <button type="submit">Adicionar carro</button>
    </form>

</body>
</html>