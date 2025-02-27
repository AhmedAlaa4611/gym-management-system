<x-layout>
    <x-slot:heading>List of Products</x-slot:heading>

    <x-table :collection="$products" :display="['name', 'description', 'price', 'quantity', 'status', 'type']" table-name="products" />
</x-layout>