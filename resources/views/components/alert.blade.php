@props(['type'])

<div class="p-4 mb-4 border rounded 
    @if($type === 'success') bg-green-100 border-green-400 text-green-700 
    @elseif($type === 'error') bg-red-100 border-red-400 text-red-700 
    @else bg-gray-100 border-gray-400 text-gray-700 @endif">
    
    {{ $slot }}
</div>
