<div class="card card-compact border-2 aspect-square">
    <div class="card-body text-center">
        <div class="flex flex-col justify-center items-center h-full gap-2">
            <x-tabler-calendar class="icon-12" />
            <div class="flex flex-col">
                <div class="text-lg font-semibold">{{ $tanggal }} {{ $bulan }}</div>
                <div class="text-xs">{{ $tahun }}</div>
            </div>
        </div>
    </div>
</div>
