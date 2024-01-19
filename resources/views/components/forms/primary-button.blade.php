@props([
    'type' => 'button',
])

<button type="{{ $type }}" class="btn btn-primary">
    {{ $slot }}
</button>
