<x-layout>
    <x-slot:heading>List of Products</x-slot:heading>
    <x-table :collection="$products"
     :display="['name','description', 'price', 'quantity','status','type']" tableName="products">
        <x-slot name="heading">Products</x-slot>
    </x-table>
</x-layout>