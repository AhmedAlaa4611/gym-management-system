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

            <div class="mb-3">
                        <label for="name" class="form-label">Package Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $package->name) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (in days)</label>
                        <input type="number" name="duration" id="duration" value="{{ old('duration', $package->duration) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" id="price" value="{{ old('price', $package->price) }}" class="form-control">
                    </div>

            <button type="submit" class="btn btn-primary">Update Package</button>
            <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-layout>
