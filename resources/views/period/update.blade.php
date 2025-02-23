<x-layout>
    <div class="container mt-4">
        <x-slot:heading>Update Gym Class</x-slot:heading>

        <form action="{{ route('period.update', $period->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row">
                <x-forms.input 
                    name="name" 
                    label="Class Name" 
                    type="text"
                    :value="old('name', $period->name)" 
                > Class Name </x-forms.input>
                
                <x-forms.textarea 
                    name="description" 
                    label="Description"
                    type="text"
                    :value="old('description', $period->description)" 
                >Description</x-forms.textarea>
                
                <x-forms.input 
                    name="coach_name" 
                    label="Coach Name" 
                    type="text"
                    :value="old('coach_name', $period->coach_name)" 
                >Coach Name </x-forms.input>
                                
                <x-forms.input 
                    name="start_time" 
                    label="Start Time" 
                    type="time" 
                    :value="old('start_time', \Carbon\Carbon::parse($period->start_time)->format('H:i'))"
                >Start Time</x-forms.input>
                
                <x-forms.input 
                    name="end_time" 
                    label="End Time" 
                    type="time" 
                    :value="old('end_time', \Carbon\Carbon::parse($period->end_time)->format('H:i'))"
                >End Time </x-forms.input>

                <x-forms.options 
                    name="day" 
                    :collection="['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']"
                    :value="old('day', $period->day)"
                >
                    Select Day
                </x-forms.options>

                <div class="col-md-6">
                    <label for="user_id" class="form-label">Gym Owner</label>
                    <select name="user_id" id="user_id" class="form-select @error('user_id') is-invalid @enderror">
                        <option value="">Select User</option>
                        @foreach($users as $user)
                            <option 
                                value="{{ $user->id }}" 
                                {{ old('user_id', $period->user_id) == $user->id ? 'selected' : '' }}
                            >
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-forms.error name="user_id" />
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary my-2">Update</button>
        </form>
    </div>
</x-layout>
