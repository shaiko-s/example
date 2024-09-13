{{-- <a href="{{ ($slot != 'Home') ? '/' . strtolower($slot) : '/' }}">{{ $slot }}</a> --}}

<a {{ $attributes }}">{{ $slot }}</a>
