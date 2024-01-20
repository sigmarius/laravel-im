@props([
    'type' => 'text',
    'isError' => false,
    'name' => ''
])

<input {{
    $attributes->class(
        ['is-invalid' => $isError,
        'form-control']
    )
}}
    type="{{ $type }}"
    id="{{ $name }}"
    name="{{ $name }}"
    required
>

