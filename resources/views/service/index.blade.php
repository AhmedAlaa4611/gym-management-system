<x-layout>
    <x-slot name="heading">List of Services</x-slot>
    <x-table :collection="$services"
     :display="['id', 'user_id', 'type', 'day']" tableName="services">
        <x-slot name="heading">Services</x-slot>
    </x-table>
</x-layout>
