<x-layout>
    <x-slot name="heading">Create Service</x-slot>

    <x-forms :action="route('service.store')">
        <x-forms.input name="user_id" type="number">User ID</x-forms.input>
        <x-forms.options name="type" :collection="['doc', 'coach']">Type</x-forms.options>
        <x-forms.options name="day" :collection="['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']">Day</x-forms.options>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>
