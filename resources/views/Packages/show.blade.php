<x-layout>
    <x-slot:heading>Package Details</x-slot:heading>

    <x-table :collection="[$package]" :display="['id', 'name', 'price', 'duration']" table-name="packages" />

    <a href="{{ route('packages.index') }}" class="btn btn-secondary mt-3">Back</a>
</x-layout>