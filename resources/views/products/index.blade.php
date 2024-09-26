@extends('layouts.app')
@section('content')
<body>
    <h1>Liste de produits</h1>
    <ul> 
        @foreach($produits as $produit)
            <li>{{$produit->name}} - {{$produit->price}} - {{$produit->quantity}} - <a href="{{ route('products.edit', ['id' => $produit->id]) }}">Éditer</a> - <a href="{{ route('products.delete', ['id' => $produit->id]) }}">Supprimer</a>

            </li>
        @endforeach
    </ul>
    <a href="{{route('products.create')}}">Créer Produit</a>
</body>
</html>
@endsection