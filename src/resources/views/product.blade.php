@extends('layouts.app')

@section('content')
    <div class="bloc">
        <img src="{{$product->img}}">
        <div class="description">
            <p>{{$product->title}}</p>
            <br />
            <!-- <table>
                <tr>
                    <td>Categorie :</td>
                    <td></td>
                </tr>
            </table> -->
            <p>{{$product->description}}</p>
            <br />
            <table>
                <tr>
                    <td>Prix :</td>
                    <td>{{$product->price}}</td>
                </tr>
                <br />
                <tr>
                    <td>Stock :</td>
                    <td> {{$product->stock}} </td>
                </tr>
            </table>
            <br />
            <p class="bouton">
                <a class="touch" href="#">Ajouter au panier</a>
            </p>
        </div>
    </div>
@endsection