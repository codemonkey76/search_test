@props([
'prefix' => false,
'suffix' => false,
'error' => false
])

<div class="mt-1 relative rounded-md shadow-sm">
    @if($prefix)
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <span class="text-gray-500 sm:text-sm">
                {{ $prefix }}
            </span>
        </div>
    @endif

    <input type="text" name="email" id="email"
           class="block w-full focus:outline-none sm:text-sm rounded-md {{ $prefix ? 'pl-7' : 'pl-2' }} {{$suffix ? 'pr-20' : ''}} {{ $error ? 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 pr-10' : 'pr-2' }}"
           placeholder="you@example.com"
           value="The quick brown fox jumped over the lazy dogs. This is a test to see how long it can be"
           aria-invalid="true" aria-describedby="email-error">

    @if($suffix)
        <div class="absolute inset-y-0 right-0 pr-10 flex items-center pointer-events-none">
        <span class="text-gray-500 sm:text-sm">
            {{ $suffix }}
        </span>
        </div>
    @endif
</div>


