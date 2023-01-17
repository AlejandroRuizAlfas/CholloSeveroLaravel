@extends('plantilla')
@section('titulo', 'Llista de ganges')
@section('contenido')
<!-- <table>
    <thead>
        <th>Titol</th>
        <th>Descripció</th>
        <th>Url</th>
        <th>Categoria</th>
        <th>Likes</th>
        <th>Dislikes</th>
        <th>Preu</th>
        <th>Preu reduit</th>
        <th>Disponible</th>
        <th>Usuari</th>
    </thead>
    <tbody>
        @foreach($gangas as $ganga)
        <tr>
            <td>{{ $ganga->title }}</td>
            <td>{{ $ganga->description }}</td>
            <td>{{ $ganga->url }}</td>
            <td>{{ $ganga->category }}</td>
            <td>{{ $ganga->likes }}</td>
            <td>{{ $ganga->unlikes }}</td>
            <td>{{ $ganga->price }}</td>
            <td>{{ $ganga->price_sale }}</td>
            <td>{{ $ganga->available }}</td>
            <td>{{ $ganga->user_id }}</td>
        </tr>
        @endforeach
    </tbody> -->

@foreach($gangas as $ganga)
<div class="ganga-div">
    <div class="div-image" style="width: 30%; float: left">
        <img src="https://static.chollometro.com/threads/raw/1yJdt/960078_1/re/1024x1024/qt/60/960078_1.jpg" width="200px" height="200px" />
    </div>

    <div class="div-content" style="width: 70%; float: right">
        <h2>{{ $ganga->title}}</h2>
        <br>
        <h3>{{ $ganga->price_sale }}€ {{ $ganga->price }}€</h3>
        <p>{{ $ganga->description }}</p>
        <p>Vendido por {{ $ganga->user->name }}</p><a href="{{ route('gangas.show', $ganga->id) }}" class="button">Vore ganga</a>

    </div>
</div>
@endforeach


</table>



<style>
    .ganga-div {
        background-color: gray;
        border-radius: 40px;
        height: 250px;
        margin: 20px 40px 20px 40px;
        color: white;
        padding-right: 5%;
    }

    img {
        width: 200px;
        height: 200px;
    }

    .div-image {
        display: grid;
        place-items: center;
        margin-top: 25px;
    }

    .div-content {
        margin-top: 40px;
        line-height: 1.5em;
    }

    .button {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        text-decoration: none;
        float: right;
        background-color: orange;
        color: white;
        padding: 10px 32px;
        border-radius: 20px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
    }
</style>
@endsection