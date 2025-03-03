<x-layout>
    <x-slot:heading>📅Subscriptions</x-slot:heading>

    <x-table :collection="$package_users" :display="['id', 'user_id', 'package_id', 'from_at', 'to_at', 'expired_at']" table-name="package_users" />
</x-layout>
