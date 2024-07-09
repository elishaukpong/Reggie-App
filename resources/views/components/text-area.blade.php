@props(['disabled' => false])

<textarea rows="5" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-nav-gray-90 focus:border-gray-300 focus:ring-gray-300 rounded-md']) !!}>

</textarea>