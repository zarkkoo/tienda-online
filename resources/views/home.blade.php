@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h2 class="text-3xl font-bold text-gray-800">Catálogo de Productos</h2>
        <p class="text-gray-600">Explora nuestra selección exclusiva de artículos.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse($products as $product)
            @include('partials.product-card', ['product' => $product])
        @empty
            <p class="col-span-4 text-center text-gray-500">No hay productos disponibles en este momento.</p>
        @endforelse
    </div>
@endsection