@props(['status'])

@php
    $isActive = strtolower($status) === 'aktif';
    $colorClass = $isActive ? 'text-green-600' : 'text-red-600';
    $dotClass = $isActive ? 'bg-green-500' : 'bg-red-500';
@endphp

<div class="flex items-center gap-2 {{ $colorClass }} font-medium text-sm">
    <span class="w-1.5 h-1.5 rounded-full {{ $dotClass }}"></span>
    {{ $status }}
</div>