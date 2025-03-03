<x-layout heading="📅subscriptions">
    <div class="container">
        
      

        {{-- جدول عرض الـ Packages --}}
        <x-table :collection="$package_users" :display="['id', 'user_id', 'package_id', 'from_at', 'to_at','expired_at']" tableName="package_users" />

    
    </div>
</x-layout>
