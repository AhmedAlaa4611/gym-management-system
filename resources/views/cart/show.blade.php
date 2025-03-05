<x-layout>
    <x-slot name="heading">Carts</x-slot>
    <x-table :display="['product_id', 'quantity']" :collection="$exsistcart" :tableName="'Cart'" />
</x-layout>
