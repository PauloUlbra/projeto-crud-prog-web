<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cars = [];
    
    ?>
    @foreach($cars as $car)
        <div>
            <h3>{{ $car->marca }}</h3>
            <p>{{ $car->modelo }}</p>
            <a href="{{ url('cars/'.$car->id.'/edit') }}">Edit</a>
            <form action="{{ url('cars/'.$product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach

</body>
</html>