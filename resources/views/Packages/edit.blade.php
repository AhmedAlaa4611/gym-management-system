<x-layout>
    <x-slot:heading>Edit Package</x-slot:heading>

    <x-forms :action="route('packages.update', $package->id)">
        @method('PUT')

        <x-forms.input type="text" name="name" :value="$package->name">Package Name</x-forms.input>

        <x-forms.input type="integer" name="duration" :value="$package->duration">Duration (days)</x-forms.input>

        <x-forms.input type="number" name="price" step="0.01" :value="$package->price">Price ($)</x-forms.input>

        <x-forms.submit>Update</x-forms.submit>
    </x-forms>
</x-layout>