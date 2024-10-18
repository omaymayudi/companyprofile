<a {{ $attributes }}
    class="{{ request()->fullUrlIs(url($href)) ? 'text-teal-600' : null }} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
    <i class="fad fa-envelope-open-text text-xs mr-2"></i>
    {{ $slot }}
</a>
