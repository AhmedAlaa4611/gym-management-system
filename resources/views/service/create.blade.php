<x-layout>
    <x-slot name="heading">Create Service</x-slot>
    <x-forms action="{{ route('service.store') }}" method="post" class="index">
        <x-forms.input name="user_id" type="number">User ID</x-forms.input>
        <x-forms.options name="type" :collection="['doc', 'coach']">Type</x-forms.options>
        <x-forms.input name="day" type="text">Day</x-forms.input>
        <x-forms.submit> Submit </x-forms.submit>
    </x-forms>
</x-layout>
