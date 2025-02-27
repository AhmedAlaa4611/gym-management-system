<x-layout heading="Package Details">
    <div class="container">
        

        {{-- استخدام x-table لعرض بيانات الباكدج الواحدة --}}
        <x-table :collection="[$package]" :display="['id', 'name', 'price', 'duration']" tableName="packages" />

        {{-- زر الرجوع --}}
        <a href="{{ route('packages.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</x-layout>

