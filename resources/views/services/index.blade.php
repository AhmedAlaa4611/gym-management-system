<x-layout>
    <x-slot:heading>List of Services</x-slot:heading>

    <x-table :collection="$services" :display="['id', 'user', 'type', 'day']" table-name="services" />
</x-layout>
