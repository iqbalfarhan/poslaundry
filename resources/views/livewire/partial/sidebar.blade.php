<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content" data-theme="dark">
    <li>
        <h3 class="text-xl font-bold">
            <x-tabler-wash />
            <span>{{ config('app.name') }}</span>
        </h3>
    </li>
    <li></li>
    <li>
        <a href="{{ route('home') }}" @class(['active' => Route::is('home')])>
            <x-tabler-home class="icon-5" />
            <span>Halaman Utama</span>
        </a>
    </li>
    <li>
        <a href="{{ route('transaksi.index') }}" @class(['active' => Route::is('transaksi.index')])>
            <x-tabler-ticket class="icon-5" />
            <span>Data Transaksi</span>
        </a>
    </li>
    <li>
        <a href="{{ route('customer.index') }}" @class(['active' => Route::is('customer.index')])>
            <x-tabler-users class="icon-5" />
            <span>Data Customer</span>
        </a>
    </li>
    <li>
        <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')])>
            <x-tabler-user-circle class="icon-5" />
            <span>Edit Profile</span>
        </a>
    </li>
    <li>
        <button wire:click="$dispatch('logout')">
            <x-tabler-logout class="icon-5" />
            <span>Keluar Aplikasi</span>
        </button>
    </li>
</ul>
