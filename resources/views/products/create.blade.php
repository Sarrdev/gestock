<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="price">Prix</label>
        <input type="number" name="price" id="price">
        <br>
        <label for="quantity">Quantite</label>
        <input type="number" name="quantity" id="quantity">
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>