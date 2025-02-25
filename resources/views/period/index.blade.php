<x-layout>
    <x-slot:heading>Add Classes For Gym</x-slot:heading>

    @php
        $displayFields = ['id', 'name', 'description', 'coach_name', 'start_time', 'end_time' , 'day', 'user'];
    @endphp

    <x-table :collection="$periods" :display="$displayFields" table-name="period" />
</x-layout>
