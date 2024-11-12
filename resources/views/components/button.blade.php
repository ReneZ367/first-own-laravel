<button
    {{ $attributes->merge(['class' => 'text-sm font-semibold leading-6 text-gray-900 px-2 py-1  bg-gray-100 rounded-lg shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600', 'type' => 'submit']) }}>
    {{ $slot }}
</button>
