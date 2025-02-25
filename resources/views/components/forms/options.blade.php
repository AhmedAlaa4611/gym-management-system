@props(['name', 'collection', 'value' => null])

<div class="col-md-6">
    <label for="{{ $name }}" class="form-label">{{ $slot }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select @error($name) is-invalid @enderror">
        <option disabled value="" {{ $value === null ? 'selected' : '' }}>
            {{ $slot }}
        </option>
        @foreach ($collection as $item)
            <option value="{{ $item }}"
                {{ trim(strtolower($value)) === trim(strtolower($item)) ? 'selected' : '' }}>
                {{ $item }}
            </option>
        @endforeach
    </select>
    <x-forms.error :name="$name" />
</div>
