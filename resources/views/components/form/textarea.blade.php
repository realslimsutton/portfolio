@props(['name', 'required' => true])

@php
    $class = 'w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b border-neutral-100 transition-colors duration-200 focus:ring-0 hover:border-neutral-200 focus:border-neutral-300 tracking-light text-neutral-900 placeholder:text-neutral-500';

    if($errors->has($name)) {
        $class .= ' border-rose-500';
    }
@endphp

<div>
    <label>
        <textarea
            {{$attributes->merge(['name' => $name, 'class' => $class])->except('required')}}
            @if($required) required @endif
        >{{old($name, '')}}</textarea>

        @error($name)
        <p class="text-sm text-rose-500">
            {{$message}}
        </p>
        @enderror
    </label>
</div>
