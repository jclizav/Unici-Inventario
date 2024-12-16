@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex w-full h-full p-2 pt-2.5 items-center text-sm font-medium leading-5 text-gray-900 dark:text-orange-700 dark:hover:text-slate-200 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center p-2 pt-2.5 text-sm font-medium leading-5 text-gray-300 dark:text-sky-700 hover:text-gray-200 dark:hover:text-gray-100 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-sky-500 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
