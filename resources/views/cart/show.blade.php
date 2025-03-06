<x-layout>
    <x-slot:heading>Carts</x-slot:heading>

    <x-table :display="['product_id', 'quantity']" :collection="$exsistcart" table-name="cart" />
</x-layout>
