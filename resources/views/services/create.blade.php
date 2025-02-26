<x-layout>
    <x-slot name="heading">Create Service</x-slot>

    <x-forms :action="route('service.store')">
        <x-forms.dropdown name="user_id" :collection="$users" type="radio" :select="null">User</x-forms.dropdown>
        <x-forms.options name="type" :collection="['doc', 'coach']">Type</x-forms.options>
        <x-forms.options name="day" :collection="App\Classes\WeekDays::get()">Day</x-forms.options>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>
