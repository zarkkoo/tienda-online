<div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col justify-between">
    <!-- Carga la imagen directamente desde la carpeta public/ con el nombre asignado -->
    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
    
    <div class="p-4 flex-1 flex flex-col justify-between">
        <div>
            <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
            <p class="text-gray-600 text-sm mt-1">{{ $product->description }}</p>
        </div>
        <div class="mt-4 flex items-center justify-between">
            <span class="text-xl font-bold text-green-600">${{ number_format($product->price, 2) }}</span>
            <button class="bg-blue-600 text-white px-3 py-1.5 rounded text-sm hover:bg-blue-700 transition">Comprar</button>
        </div>
    </div>
</div>