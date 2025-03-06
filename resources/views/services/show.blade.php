<x-layout>
    <x-slot:heading>Service Details</x-slot:heading>

    <div class="row">
        <div class="col-sm-4 mb-4 mx-auto">
            <div class="card">
                <div class="card-header">Service ID: {{ $service->id }}</div>
                <div class="card-body">
                    <p class="card-text"><span>User ID: </span>{{ $service->user->name }}</p>
                    <p class="card-text"><span>Type: </span>{{ $service->type }}</p>
                    <p class="card-text"><span>Day: </span>{{ $service->day }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
