<x-layout heading="Subscription Details">
    <div class="container">
        
        {{-- استخدام x-table لعرض بيانات الاشتراك الواحد --}}
        <x-table :collection="[$packageUser]" 
                 :display="['id', 'user_id', 'package_id', 'from_at', 'to_at', 'expired_at']" 
                 tableName="package_users" />

        {{-- زر الرجوع --}}
        <a href="{{ route('package_users.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</x-layout>
