<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-rose-500 border border-transparent rounded-md font-semibold text-md text-white uppercase tracking-widest hover:bg-rose-400 focus:bg-orange-300 active:bg-rose-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
