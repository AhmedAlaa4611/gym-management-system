<x-layout>
    <x-slot name="heading">Products</x-slot>

    <div class="row">
        <div class="col-sm-4 mb-4 mx-auto">
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>
                <div class="card-body">
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
