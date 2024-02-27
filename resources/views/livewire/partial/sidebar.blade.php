<ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content space-y-4 border-r-2" data-theme="aqua">
    <li>
        <h3 class="text-xl font-bold">
            <x-tabler-wash-dry-1 />
            <span>{{ config('app.name') }}</span>
        </h3>
    </li>
    <li>
        <h3 class="menu-title">Dashboard</h3>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-home class="icon-5" />
                    <span>Halaman Utama</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.index') }}" @class([
                    'active' => Route::is([
                        'transaksi.index',
                        'transaksi.create',
                        'transaksi.detail',
                    ]),
                ]) wire:navigate>
                    <x-tabler-ticket class="icon-5" />
                    <span>Data Transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Data master</h3>
        <ul>
            <li>
                <a href="{{ route('customer.index') }}" @class(['active' => Route::is(['customer.index', 'customer.show'])]) wire:navigate>
                    <x-tabler-users class="icon-5" />
                    <span>Data Customer</span>
                </a>
            </li>
            <li>
                <a href="{{ route('paket.index') }}" @class(['active' => Route::is('paket.index')]) wire:navigate>
                    <x-tabler-box class="icon-5" />
                    <span>Paket Laundry</span>
                </a>
            </li>
            <li>
                <a href="{{ route('setting.index') }}" @class(['active' => Route::is('setting.index')]) wire:navigate>
                    <x-tabler-settings class="icon-5" />
                    <span>Pengaturan aplikasi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Pengaturan akun</h3>
        <ul>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user-circle class="icon-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dokumentasi') }}" @class(['active' => Route::is('dokumentasi')]) wire:navigate>
                    <x-tabler-book class="icon-5" />
                    <span>Buku Pentunjuk</span>
                </a>
            </li>
            <li>
                <button wire:click="$dispatch('logout')">
                    <x-tabler-logout class="icon-5" />
                    <span>Keluar Aplikasi</span>
                </button>
            </li>
        </ul>
    </li>
</ul>
