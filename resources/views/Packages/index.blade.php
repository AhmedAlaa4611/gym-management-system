<x-layout heading="📦Packages Management">
    <div class="container">
       

        {{-- زر إضافة باكدج جديدة --}}
       
      {{-- <x-buttons.primary :url="'/create'">Add New One</x-buttons.primary>
           x-buttons.primary :url="'/{package}'">Show</x-buttons.primary> 

        {{-- جدول عرض الـ Packages --}}
        <x-table :collection="$packages" :display="['id', 'name', 'price', 'duration']" tableName="packages" />
    </div>
</x-layout>
