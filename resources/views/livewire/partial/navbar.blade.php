<div class="navbar bg-base-100 border-b">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle">
            <x-tabler-menu-2 class="icon-5" />
        </label>
    </div>
    <div class="navbar-center">
        <span class="font-semibold text-xl">{{ $title }}</span>
    </div>
    <div class="navbar-end">
        <button class="btn btn-ghost btn-circle">
            <div class="indicator">
                <x-tabler-bell class="icon-5" />
                <span class="badge badge-xs badge-primary indicator-item"></span>
            </div>
        </button>
    </div>
</div>
