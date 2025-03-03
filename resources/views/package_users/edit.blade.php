<x-layout heading="Edit Package User">
    <div class="container mt-5">
        <h2>Edit Package User</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('package_users.update', $packageUser->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="text" name="user_id" id="user_id" value="{{ old('user_id', $packageUser->user_id) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="package_id" class="form-label">Package ID</label>
                <input type="text" name="package_id" id="package_id" value="{{ old('package_id', $packageUser->package_id) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="from_at" class="form-label">Start Date (from_at)</label>
                <input type="date" name="from_at" id="from_at" value="{{ old('from_at', $packageUser->from_at) }}" class="form-control">
            </div>

            

            <button type="submit" class="btn btn-primary">Update Package User</button>
            <a href="{{ route('package_users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-layout>
