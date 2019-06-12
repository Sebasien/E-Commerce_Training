@extends('layouts.app')

@section('content')
    <div class="display-catalogue">
    @foreach($cata as $product)
    <div class="ligne">
        <img class="img" src="{{$product->img}}">
        <table class="description">
            <tr>
                <td>
                    <p>{{$product->title}}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <a class="link" href="/product/{{ $product->id }}" > Détails </a>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="bouton">
                        <a class="touch" href="#">Achat Direct</a>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    @endforeach
    </div>
@endsection
