<div class="navbar bg-base-100 border-b-2 print:hidden">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle">
            <x-tabler-menu-2 class="icon-5" />
        </label>
    </div>
    <div class="navbar-center">
        <span class="font-semibold text-xl">{{ $title }}</span>
    </div>
    <div class="navbar-end">
        <a href="{{ route('dokumentasi') }}" class="btn btn-ghost btn-circle">
            <x-tabler-search class="icon-5" />
        </a>
        <a href="{{ route('dokumentasi') }}" class="btn btn-ghost btn-circle">
            <x-tabler-book class="icon-5" />
        </a>
    </div>
</div>
