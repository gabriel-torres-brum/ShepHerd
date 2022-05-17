@if($errors->any())
<div class="p-2.5 text-error-content/90 bg-error/70 rounded">
    <ul>
        {{-- @foreach ($errors->all() as $error) --}}
        <li class="text-center">
            {{ $errors->first() }}
        </li>
        {{-- @endforeach --}}
    </ul>
</div>
@endif