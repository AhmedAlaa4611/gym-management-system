<x-layout>
    <x-slot name="heading">Edit Service</x-slot>
    <x-forms class="index" action="{{ route('services.update', $service->id) }}" method="POST">
        @method('PUT')
        <x-forms.input name="id" type="number" :value="$service->id" hidden></x-forms.input>
        <x-forms.input name="user_id" type="number" :value="$service->user_id">User ID</x-forms.input>
        <x-forms.options name="type" :collection="['doc', 'coach']" :selected="$service->type">Type</x-forms.options>
        <x-forms.input name="day" type="text" :value="$service->day">Day</x-forms.input>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>
