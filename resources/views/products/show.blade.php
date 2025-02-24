<x-layout>
    <x-slot name="heading">Products</x-slot>


            <div class="d-flex justify-content-center align-items-center">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $product->name }}</h4>
                    </div>
                    <div class="card-body">
                        <p><span>Description: </span>{{ $product->description }}</p>
                        <p><span>Price: </span>{{ $product->price }}</p>
                        <p><span>Quantity: </span>{{ $product->quantity }}</p>
                        <p><span>Status: </span>{{ $product->status }}</p>
                        <p><span>Type: </span>{{ $product->type }}</p>
                    </div>
                </div>
            </div>
       

</x-layout>
