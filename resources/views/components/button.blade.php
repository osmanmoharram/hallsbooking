<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center w-32 py-3 bg-coolgray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-coolgray-700 active:bg-coolgray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
