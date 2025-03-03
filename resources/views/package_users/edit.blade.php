<x-layout>
    <x-slot:heading>Edit Package User</x-slot:heading>

    <x-forms :action="route('package_users.update', $packageUser->id)">
        @method('PUT')

        <x-forms.dropdown name="user_id" :collection="$users" type="radio" :select="$packageUser->user->id">User</x-forms.dropdown>

        <x-forms.input type="number" name="package_id" :value="$packageUser->package_id">Package ID</x-forms.input>

        <x-forms.input type="date" name="from_at" :value="$packageUser->from_at->format('Y-m-d')">From</x-forms.input>

        <x-forms.submit>Update</x-forms.submit>
    </x-forms>
</x-layout>