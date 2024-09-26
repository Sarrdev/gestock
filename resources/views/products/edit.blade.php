<!-- edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Édition de produit</title>
</head>
<body>
    <form action="{{ route('products.update', ['id' => $produit->id]) }}" method="POST">
        @csrf
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" value="{{$produit->name}}">
        <br>
        <label for="price">Prix</label>
        <input type="number" name="price" id="price" value="{{$produit->price}}">
        <br>
        <label for="quantity">Quantité</label>
        <input type="number" name="quantity" id="quantity" value="{{$produit->quantity}}">
        <br>
        <input type="submit" value="Envoyer">
    </form>    
</body>
</html>
