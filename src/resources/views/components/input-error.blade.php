@props(['messages'])

@if ($messages)
    <ul>
        @foreach ((array) $messages as $message)
            <li style="color: red;">{{ $message }}</li>
        @endforeach
    </ul>
@endif
