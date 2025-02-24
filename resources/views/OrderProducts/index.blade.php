<x-layout>
    <x-slot name="heading">List of Order Products</x-slot>
    <x-table :collection="$orderproducts"
     :display="['order_id','product_id']" tableName="orderProducts">
        <x-slot name="heading">Order Products</x-slot>
    </x-table>
</x-layout>