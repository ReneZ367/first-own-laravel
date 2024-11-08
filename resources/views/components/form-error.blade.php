@props(['name'])

@error($name)
    <p class="texts-xs text-red-500 font-semibold">{{ $message }}</p>
@enderror
