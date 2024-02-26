<div class="space-y-6">

    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-2 row-span-2">
            @livewire('widget.pendapatan-bulanan')
        </div>
        <div class="card card-compact border-2 aspect-square">
            <div class="card-body text-center">
                <div class="grid place-content-center h-full">
                    <h1 class="text-6xl font-semibold">23</h1>
                    <div class="text-lg">Dalam proses</div>
                </div>
            </div>
        </div>
        <div class="card card-compact border-2 aspect-square">
            <div class="card-body text-center">
                <div class="grid place-content-center h-full">
                    <h1 class="text-6xl font-semibold">20</h1>
                    <div class="text-lg">Sudah selesai</div>
                </div>
            </div>
        </div>
        <div class="col-span-2 row-span-2">
            @livewire('widget.status-laundry')
        </div>
        <div class="aspect-square col-span-2 row-span-2">
            @livewire('widget.status')
        </div>
        <div class="card card-compact border-2 aspect-auto col-span-2">
            <div class="card-body flex justify-between">
                <div class="line-clamp-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla cupiditate quasi cum voluptatem odio
                    doloremque eligendi quod velit officiis, aspernatur, animi repellat similique! Sequi rem ducimus in
                    reprehenderit nobis vel!
                </div>
                <div class="card-actions justify-between items-baseline">
                    <div class="card-title">Buat transaksi</div>
                    <a href="{{ route('transaksi.create') }}" class="btn btn-circle" wire:navigate>
                        <x-tabler-chevron-right />
                    </a>
                </div>

            </div>
        </div>
        <div class="card card-compact border-2 aspect-square">
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, sequi!
            </div>
        </div>
        <div class="card card-compact border-2 aspect-square">
            <div class="card-body">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, illum?
            </div>
        </div>
    </div>

</div>
