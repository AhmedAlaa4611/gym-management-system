<x-layout heading="subscriptions">
    <form action="{{ route('package_users.store') }}" method="POST" class="space-y-4">
        @csrf
 
        <x-forms.input name="user_id" type="number" required> User ID</x-forms.input>
        <x-forms.input name="package_id" type="number" required>Package ID</x-forms.input>
        <x-forms.input name="from_at" type="date" required>from_at</x-forms.input>
       
        <x-forms.submit label="Create New Subscription">Add</x-forms.submit>
    </form>
</x-layout>
