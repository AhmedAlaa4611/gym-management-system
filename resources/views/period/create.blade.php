<x-layout>
    <div class="container mt-4">
        <x-slot:heading>Add New Gym Class</x-slot:heading>

        <form action="{{ route('period.store') }}" method="POST">
            @csrf
            <div class="row">
                <x-forms.input name="name" label="Class Name" type="text"> Name </x-forms.input>
                
                <x-forms.textarea name="description" label="Description" type="text"> Description </x-forms.input>
                
                <x-forms.input name="coach_name" label="Coach Name" type="text">Coach Name</x-forms.input>
                                
                <x-forms.input name="start_time" label="Start Time" type="time" >Start Time </x-forms.input>
                
                <x-forms.input name="end_time" label="End Time" type="time" >End Time </x-forms.input>

                <x-forms.options name="day" :collection="['Sunday', 'Monday', 'Tuesday', 'Wednesday' , 'Thursday' ,'Friday','Saturday' ]"  >
                    Select Day 
                </x-forms.options>
                  
                <div class="col-md-6">
                    <label for="user_id" class="form-label">Gym Owner</label>
                    <select name="user_id" id="user_id" class="form-select @error('user_id') is-invalid @enderror">
                        <option value="">Select User</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-forms.error name="user_id" />
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary my-2">Create</button>
        </form>
    </div>
</x-layout>
