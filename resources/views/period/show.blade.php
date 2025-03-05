<x-layout>
    <x-slot name="heading">Class Details</x-slot>

    <div class="row">
        <div class="col-sm-4 mb-4 mx-auto text-center">
            <div class="card">
                <div class="card-header">Period ID: {{ $period->id }}</div>
                <div class="card-body">
                    <p class="card-text"><span>Name: </span>{{ $period->name }}</p>
                    <p class="card-text"><span>Description: </span>{{ $period->description }}</p>
                    <p class="card-text"><span>Coach Name: </span>{{ $period->coach_name }}</p>
                    <p class="card-text"><span>Start Time: </span>{{ $period->start_time }}</p>
                    <p class="card-text"><span>End Time: </span>{{ $period->end_time }}</p>
                    <p class="card-text"><span>Day: </span>{{ $period->day }}</p>
                    <p class="card-text"><span>User Id: </span>{{ $period->user->id }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>