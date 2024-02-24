<div class="navbar bg-base-100 border-b">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle">
            <x-tabler-menu class="icon-5" />
        </label>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
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
