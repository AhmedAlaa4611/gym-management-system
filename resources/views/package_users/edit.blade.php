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

            <x-input name="user_id" value="{{ $packageUser->user_id }}" class="mb-3">
                User ID
            </x-input>

            <x-input name="package_id" value="{{ $packageUser->package_id }}" class="mb-3">
                Package ID
            </x-input>

                     <x-input name="from_at" value="{{ $packageUser->from_at }}" type="date" class="mb-3">
                        Start Date (from_at)
                    </x-input>

                    <x-input name="to_at" value="{{ $packageUser->to_at }}" type="date" class="mb-3" readonly>
                        End Date (to_at) - Auto Calculated
                    </x-input>


            <x-input name="expired_at" value="{{ $packageUser->expired_at }}" type="date" class="mb-3">
                Expired Date (expired_at)
            </x-input>

            <x-input name="reserved_at" value="{{ $packageUser->reserved_at }}" type="date" class="mb-3">
                Reserved Date (reserved_at)
            </x-input>

            <button type="submit" class="btn btn-primary">Update Package User</button>
            <a href="{{ route('package_users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-layout>
