<x-layout>
    <x-slot:heading>List of Order Products</x-slot:heading>

    <x-table :collection="$orderproducts" :display="['order_id', 'product_id']" table-name="orderProducts" />
</x-layout>