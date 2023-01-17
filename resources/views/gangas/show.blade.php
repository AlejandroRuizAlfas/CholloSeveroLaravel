@extends('plantilla')
@section('titulo', 'Informació Ganga')
@section('contenido')
<div class="bg-white p-6 rounded-lg">
    <h1 class="text-xl font-medium mb-2">{{ $ganga->title }}</h1>
    <div class="mb-4">
        <span class="text-gray-600">{{ $ganga->category }}</span>
    </div>
    <p class="text-gray-600">{{ $ganga->description }}</p>
    <div class="my-4">
        <a href="{{ $ganga->url }}" class="btn bg-blue-500 text-white">View on website</a>
    </div>
    <div class="flex items-center my-4">
        <span class="text-lg font-medium mr-2">Price:</span>
        <span class="text-gray-600">{{ $ganga->price }}</span>
    </div>
    <div class="flex items-center">
        <span class="text-lg font-medium mr-2">Sale Price:</span>
        <span class="text-gray-600">{{ $ganga->price_sale }}</span>
    </div>
    <div class="my-4">
        <span class="text-lg font-medium mr-2">Availability:</span>
        <span class="text-gray-600">{{ $ganga->available }}</span>
    </div>
    <div class="my-4">
        <span class="text-lg font-medium mr-2">User:</span>
        <span class="text-gray-600">{{ $ganga->user_id }}</span>
    </div>
    <div class="my-4">
        <span class="text-lg font-medium mr-2">Likes:</span>
        <span class="text-gray-600">{{ $ganga->likes }}</span>
    </div>
    <div class="my-4">
        <span class="text-lg font-medium mr-2">Unlikes:</span>
        <span class="text-gray-600">{{ $ganga->unlikes }}</span>
    </div>
</div>
@endsection