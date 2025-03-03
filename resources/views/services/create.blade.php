<x-layout>
    <x-slot name="heading">Create Service</x-slot>

    <x-forms :action="route('service.store')">
        <x-forms.options name="type" :collection="['doc', 'coach']">Type</x-forms.options>
        <x-forms.options name="day" :collection="App\Classes\WeekDays::get()">Day</x-forms.options>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>
