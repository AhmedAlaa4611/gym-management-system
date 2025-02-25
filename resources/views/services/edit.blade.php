<x-layout>
    <x-slot name="heading">Edit Service</x-slot>

    <x-forms :action="route('services.update', $service->id)">
        @method('PUT')
        <x-forms.input name="user_id" type="number" :value="$service->user_id">User ID</x-forms.input>
        <x-forms.options name="type" :collection="['doc', 'coach']" :selected="$service->type">Type</x-forms.options>
        <x-forms.options name="day" :collection="['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']" :value="$service->day">Day</x-forms.options>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>
