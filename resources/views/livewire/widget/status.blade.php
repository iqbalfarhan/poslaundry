<div class="card card-compact border-2 w-full h-full">
    <div class="card-body text-center space-y-8 gap-4 justify-evenly">
        <img src="{{ url($steps[$step]['image']) }}" alt="" class="h-32 mx-auto">
        <div>
            <h3 class="font-bold uppercase">{{ $steps[$step]['status'] }}...</h3>
            <div class="text-sm opacity-50">
                Order anda telah selasai 23 menit lalu. Laundy anda sudah siap untuk diambil.
            </div>
        </div>
        <div class="card-actions justify-between items-center">
            <button class="btn btn-xs btn-circle">
                <x-tabler-chevron-left class="icon-4" />
            </button>
            <div class="rating gap-1 text-center justify-center">
                <div class="icon-3 rounded-full bg-neutral"></div>
                <div class="icon-3 rounded-full bg-neutral"></div>
                <div class="icon-3 rounded-full bg-neutral"></div>
                <div class="icon-3 rounded-full bg-neutral"></div>
            </div>
            <button class="btn btn-xs btn-circle">
                <x-tabler-chevron-right class="icon-4" />
            </button>
        </div>
    </div>
</div>
