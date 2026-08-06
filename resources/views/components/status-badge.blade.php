@if($status == 'Aktif')
    <span class="px-3 py-1 text-xs font-semibold text-green-800 bg-green-200 rounded-full">
        {{ $status }}
    </span>
@else
    <span class="px-3 py-1 text-xs font-semibold text-red-800 bg-red-200 rounded-full">
        {{ $status }}
    </span>
@endif