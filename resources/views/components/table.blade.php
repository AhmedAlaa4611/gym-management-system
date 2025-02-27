@props(['collection', 'display', 'tableName'])

<div class="mb-2">
    <x-buttons.primary :url="'/'.Str::kebab($tableName).'/create'">Add New One</x-buttons.primary>
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                @foreach ($display as $item)
                    <th scope="col" class="text-capitalize text-center">{{ str_replace('_', ' ', $item) }}</th>
                @endforeach
                <th scope="col" class="text-capitalize text-center">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item1)
                <tr class="text-capitalize text-center">
                    @foreach ($display as $item2)
                        <td>
                            @if($item2 === 'user')
                                {{ $item1->user?->name ?? 'Not Found' }}
                            @else
                                {{ $item1->$item2 }}
                            @endif
                        </td>
                    @endforeach
                    <td>
                        @php
                            $link = '/'.Str::kebab($tableName).'/'.$item1->id;
                        @endphp
                        <x-buttons.primary :url="$link">Show</x-buttons.primary>
                        <x-buttons.update :url="$link.'/edit'" />
                        <x-buttons.delete :url="$link" />
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="{{ count($display) + 1 }}">The number of {{ str_replace('_', ' ', $tableName) }} is: {{ count($collection) }}</td>
            </tr>
        </tfoot>
    </table>
</div>