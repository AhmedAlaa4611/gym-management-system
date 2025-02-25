<x-layout>
    <x-slot name="heading">Service Details</x-slot>

    <div class="d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                <h4>Service ID: {{ $service->id }}</h4>
            </div>
            <div class="card-body">
                <p><span>User ID: </span>{{ $service->user_id }}</p>
                <p><span>Type: </span>{{ $service->type }}</p>
                <p><span>Day: </span>{{ $service->day }}</p>
            </div>
        </div>
    </div>

</x-layout>
