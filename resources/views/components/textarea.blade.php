@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['rows' => '3', 'class' => 'rounded-md shadow-sm border-gray-300 focus:border-coolgray-300 focus:ring-4 focus:ring-coolgray-400 focus:ring-opacity-30 transition duration-150 ease-in-out']) !!}>
	{{ $slot }}
</textarea>
