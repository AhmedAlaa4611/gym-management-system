@props(['url' => null, 'type' => 'button'])

@if($url)
    <a href="{{ $url }}" class="btn btn-primary my-1">{{ $slot }}</a>
@else
    <button type="{{ $type }}" class="btn btn-primary my-1">{{ $slot }}</button>
@endif
