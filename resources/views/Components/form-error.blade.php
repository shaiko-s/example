@props(['name'])

@error($name)
    <p class="text-sm text-red-500 font-semibold mt-2">{{ $message }}</p>
@enderror
