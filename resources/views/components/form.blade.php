@props([
    'mt' => 8,
    'spacey' => 6,
])

<form {{ $attributes->merge(['class' => "mt-$mt space-y-$spacey"]) }}>
    @csrf
    {{$slot}}
</form>
