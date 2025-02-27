<x-layout>
    <x-slot name="heading">Edit Service</x-slot>

    <x-forms :action="route('service.update', $service->id)">
        @method('PUT')
        <x-forms.dropdown name="user_id" :collection="$users" type="radio" :select="$service->user_id">User</x-forms.dropdown>
        <x-forms.options name="type" :collection="['doc', 'coach']" :value="$service->type">Type</x-forms.options>
        <x-forms.options name="day" :collection="App\Classes\WeekDays::get()" :value="$service->day">Day</x-forms.options>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>
