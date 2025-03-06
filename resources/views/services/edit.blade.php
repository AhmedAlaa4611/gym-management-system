<x-layout>
    <x-slot:heading>Edit Service</x-slot:heading>

    <x-forms :action="route('service.update', $service->id)">
        @method('PUT')
        <x-forms.options name="type" :collection="['doc', 'coach']" :value="$service->type">Type</x-forms.options>
        <x-forms.options name="day" :collection="App\Classes\WeekDays::get()" :value="$service->day">Day</x-forms.options>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>
