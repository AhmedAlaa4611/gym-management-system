<x-layout>
    <x-slot:heading>Edit Product</x-slot:heading>

    <x-forms :action="route('products.update', $product->id)">
        @method('PUT')
        <x-forms.input name="name" type="text" :value="$product->name">Name</x-forms.input>
        <x-forms.input name="description" type="text" :value="$product->description">Description</x-forms.input>
        <x-forms.input name="price" type="number" :value="$product->price">Price</x-forms.input>
        <x-forms.input name="quantity" type="number" :value="$product->quantity">Quantity</x-forms.input>
        <x-forms.options name="type" :collection="['clothes', 'equipment', 'protine']" :selected="$product->type">Type</x-forms.options>
        <x-forms.input type="file" name="image" accept="image/*">Product Image</x-forms.input>
        <x-forms.submit>Submit</x-forms.submit>
    </x-forms>
</x-layout>