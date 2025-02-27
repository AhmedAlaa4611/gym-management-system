<x-layout heading="Edit Package">
    <div class="container mt-5">
        <h2>Edit Package</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('packages.update', $package->id) }}" method="POST">
            @csrf
            @method('PUT')

            <x-input name="name" value="{{ $package->name }}" class="mb-3">
                Package Name
            </x-input>

            <x-input name="duration" value="{{ $package->duration }}" type="integer" class="mb-3">
                Duration (in days)
            </x-input>

            <x-input name="price" value="{{ $package->price }}" type="text" class="mb-3">
                Price
            </x-input>

            <button type="submit" class="btn btn-primary">Update Package</button>
            <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-layout>
