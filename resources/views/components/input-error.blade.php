@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-dorado dark:text-dorado']) }}>{{ $message }}</p>
@enderror
