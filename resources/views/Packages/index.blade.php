<x-layout>
    <x-slot:heading>📦Packages Management</x-slot:heading>

    <x-table :collection="$packages" :display="['id', 'name', 'price', 'duration']" table-name="packages" />
</x-layout>