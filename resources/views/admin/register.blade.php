<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <x-forms :action="route('register.store')" enctype="multipart/form-data">
        <x-forms.input type="text" name="name">Name</x-forms.input>

        <x-forms.input type="email" name="email">Email</x-forms.input>

        <x-forms.input type="password" name="password">Password</x-forms.input>

        <x-forms.input type="password" name="password_confirmation">Password Confirmation</x-forms.input>

        <x-forms.options name="type" :collection="['gym_owner', 'store_owner', 'customer']">
            Select a Type
        </x-forms.options>

        <x-forms.input type="text" name="phone" maxlength="11">Phone</x-forms.input>

        <x-forms.input type="file" name="image" accept="image/*">Profile Image</x-forms.input>

        <x-forms.input type="text" name="location">Location</x-forms.input>

        <x-forms.textarea name="bio">Bio</x-forms.textarea>

        <x-forms.submit>Register</x-forms.submit>
    </x-forms>
</x-layout>
