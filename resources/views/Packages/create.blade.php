<x-layout>
    <x-slot:heading>Add New Package</x-slot:heading>

    <x-forms :action="route('packages.store')">
        <x-forms.input type="text" name="name">Package Name</x-forms.input>

        <x-forms.input type="integer" name="duration">Duration (days)</x-forms.input>

        <x-forms.input type="number" name="price" step="0.01">Price ($)</x-forms.input>

        <x-forms.submit>Add</x-forms.submit>
    </x-forms>
</x-layout>