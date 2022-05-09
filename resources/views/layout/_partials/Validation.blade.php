<ul>
    {{-- @foreach ($errors->all() as $error) --}}
    <li class="text-center">
        {{ $errors->first() }}
    </li>
    {{-- @endforeach --}}
</ul>
