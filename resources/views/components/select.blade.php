@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-nav-gray-90 focus:border-gray-500 focus:ring-gray-500 rounded-md']) !!}>
</select>