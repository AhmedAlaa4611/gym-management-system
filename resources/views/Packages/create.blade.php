<x-layout heading="Add New Package">
    <form action="{{ route('packages.store') }}" method="POST" class="space-y-4">
        @csrf

        <x-forms.input name="name" required>Package Name</x-forms.input>
        <x-forms.input name="duration" type="integer" required>Duration (days)</x-forms.input>
        <x-forms.input name="price" type="number" step="0.01" required>Price ($)</x-forms.input>

        <x-forms.submit label="Create Package">Add</x-forms.submit>
        
    </form>
</x-layout>

