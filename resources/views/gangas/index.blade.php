@extends('plantilla')
@section('titulo', 'Llista de ganges')
@section('contenido')


<ul class="mystyle-products">
    @foreach($gangas as $ganga)
    <li class="product">
        <a href="{{ route('gangas.show', $ganga->id) }}">
            @if($ganga->available)
            <span class="onsale">Disponible!</span>
            @endif
            <img alt="" class="attachment-shop_catalog" src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/v/e/vet%20vang%20(1).u2470.d20160606.t122127.jpg" />
            <h3>{{ $ganga->title }}</h3>
            <span class="price">
                <del> <span class="amount">{{ $ganga->price }} €</span> </del>
                <ins> <span class="amount">{{ $ganga->price_sale }} €</span> </ins>
                <span class="sale-tag sale-tag-square">-33%</span>
            </span>
        </a>
        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#"> </a>
        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
    </li>
    @endforeach
</ul>



<style>
    /*----------------------------- Section: Products List ----------------------------- */
    :root {
        --breakpoint-xs: 600px;
        --breakpoint-sm: 768px;
        --red: #e41919;
    }


    img {
        max-width: 100%;
    }

    body {
        background: #f4f4f4;
        font-family: sans-serif;
    }

    .mystyle-products {
        list-style: none;
        margin: 40px;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }

    @media (max-width: var(--breakpoint-xs)) {
        .mystyle-products {
            display: block;
        }
    }

    .mystyle-products.slider-products .product {
        width: auto;
        margin-bottom: 0;
    }

    .mystyle-products .product {
        width: 25%;
        margin-bottom: 20px;
        position: relative;
        padding: 20px;
        background: #fff;
        margin-left: 0px;
        margin-right: 0px;
    }

    @media (max-width: var(--breakpoint-sm)) {
        .mystyle-products .product {
            width: 50%;
        }
    }

    @media (max-width: var(--breakpoint-xs)) {
        .mystyle-products .product {
            width: auto;
        }
    }

    .mystyle-products .product:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, .1);
        z-index: 7;
    }

    .mystyle-products .product:hover .btn-circle {
        transform: translateY(0);
        visibility: visible;
        opacity: 1;
    }

    .mystyle-products .product h3 {
        font-size: 12px;
        line-height: 20px;
        margin-top: 10px;
        height: 39px;
        overflow: hidden;
    }

    @media (max-width: var(--breakpoint-xs)) {
        .mystyle-products .product h3 {
            height: auto;
        }
    }

    .mystyle-products .product>a {
        position: relative;
        display: block;
        color: #333;
        text-decoration: none;
    }

    .mystyle-products .product>a:hover {
        text-decoration: none;
    }

    .mystyle-products .product .add_to_cart_button {
        display: none;
    }

    .mystyle-products .product .attachment-shop_catalog {
        display: block;
        margin: 0 auto;
    }

    .mystyle-products .product .btn-circle {
        border-radius: 50%;
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: block;
        padding: 0;
        position: absolute;
        top: 20%;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        z-index: 2;
        color: #fff;
        transform: translateY(-20px);
        opacity: 0;
        visibility: hidden;
        transition: color 0.5s 0.001s ease-out, background 0.3s 0.001s ease-out, visibility 0.5s 0.25s ease-out, opacity 0.5s 0.25s ease-out, transform 0.5s 0.25s ease-out;
    }

    .mystyle-products .product .price {
        font-size: 14px;
    }

    .mystyle-products .product .price ins {
        text-decoration: none;
        font-weight: 700;
        white-space: nowrap;
    }

    .mystyle-products .product .price del {
        color: #666;
        font-size: 11px;
        padding-right: 7px;
        white-space: nowrap;
    }

    .mystyle-products .product .price .sale-tag {
        color: red;
        font-size: 12px;
        padding-left: 7px;
        font-weight: 700;
    }

    .mystyle-products .onsale {
        z-index: 6;
        position: absolute;
        top: 15px;
        left: -20px;
        padding: 2px 10px;
        background: var(--red);
        color: #fff;
        box-shadow: -1px 2px 3px rgba(0, 0, 0, .3);
        border-radius: 0 5px 5px 0;
        height: 25px;
        line-height: 25px;
        font-size: 0.8rem;
        font-weight: normal;
        padding-top: 0;
        padding-bottom: 0;
        min-height: 0;
    }

    .mystyle-products .onsale:before,
    .mystyle-products .onsale:after {
        content: "";
        position: absolute;
    }

    .mystyle-products .onsale:before {
        width: 7px;
        height: 33px;
        top: 0;
        left: -6.5px;
        padding: 0 0 7px;
        background: inherit;
        border-radius: 5px 0 0 5px;
    }

    .mystyle-products .onsale:after {
        width: 5px;
        height: 5px;
        bottom: -5px;
        left: -4.5px;
        border-radius: 5px 0 0 5px;
        background: #800;
    }
</style>
@endsection