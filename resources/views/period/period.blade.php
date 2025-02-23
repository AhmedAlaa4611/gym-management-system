<x-layout>
    <div class="container mt-4">
        <x-slot:heading>Add Classes For Gym</x-slot:heading>

        @php
            $displayFields = ['id', 'name', 'description', 'coach_name', 'start_time', 'end_time' , 'day'];
        @endphp

        <x-table 
            :collection="$periods" 
            :display="$displayFields" 
            tableName="period" 
        />
    </div>
</x-layout>
