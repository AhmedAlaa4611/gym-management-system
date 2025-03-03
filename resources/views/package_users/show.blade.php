<x-layout>
    <x-slot:heading>📅Subscriptions</x-slot:heading>

    <x-table :collection="[$packageUser]" :display="['id', 'user_id', 'package_id', 'from_at', 'to_at', 'expired_at']" table-name="package_users" />

    <a href="{{ route('package_users.index') }}" class="btn btn-secondary mt-3">Back</a>
</x-layout>