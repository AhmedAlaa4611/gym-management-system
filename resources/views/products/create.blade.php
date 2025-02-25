<x-layout>
    <x-slot name="heading">Create Product</x-slot>

    <x-forms :action="route('products.store')">
        <x-forms.input name="name" type="text">Name</x-forms.input>
        <x-forms.input name="description" type="text">Description</x-forms.input>
        <x-forms.input name="price" type="number">Price</x-forms.input>
        <x-forms.input name="quantity" type="number">Quantity</x-forms.input>
        <x-forms.options name="type" :collection="['clothes', 'equipment', 'protine']">Type</x-forms.options>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>
