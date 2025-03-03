<x-layout>
    <x-slot:heading>Subscriptions</x-slot:heading>

    <x-forms :action="route('package_users.store')">
        <x-forms.dropdown name="user_id" :collection="$users" type="radio" :select="null">User</x-forms.dropdown>

        <x-forms.input type="number" name="package_id">Package ID</x-forms.input>

        <x-forms.input type="date" name="from_at">From</x-forms.input>

        <x-forms.submit>Add</x-forms.submit>
    </x-forms>
</x-layout>
