<x-layout>
    <x-slot:heading>Products</x-slot:heading>

    <div class="row">
        <div class="col-sm-4 mb-4 mx-auto">
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>
                <div class="card-body">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    @endif
                    <p class="card-text"><span>Description: </span>{{ $product->description }}</p>
                    <p class="card-text"><span>Price: </span>{{ $product->price }}</p>
                    <p class="card-text"><span>Quantity: </span>{{ $product->quantity }}</p>
                    <p class="card-text"><span>Status: </span>{{ $product->status }}</p>
                    <p class="card-text"><span>Type: </span>{{ $product->type }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
