<div class="card card-compact border-2 w-full h-full" wire:poll.10s="increase">
    <div class="card-body text-center space-y-6 justify-evenly">
        <h3 class="font-bold uppercase">{{ $steps[$step]['title'] }}</h3>
        <img src="{{ url($steps[$step]['illustration']) }}" alt="" class="h-36 mx-auto bg-base-200 p-4 skeleton">
        <div class="text-xs opacity-50">
            {{ $steps[$step]['keterangan'] }}
        </div>
        <div class="card-actions justify-between items-center">
            <button class="btn btn-xs btn-circle btn-neutral" wire:click="decrease">
                <x-tabler-chevron-left class="icon-4" />
            </button>
            <div class="rating gap-1 text-center justify-center">
                @foreach ($steps as $key => $step)
                    <input type="radio" value="{{ $key }}" name="rating-1" wire:model.live="step"
                        class="icon-2 rounded-full" />
                @endforeach
            </div>
            <button class="btn btn-xs btn-circle btn-neutral" wire:click="increase">
                <x-tabler-chevron-right class="icon-4" />
            </button>
        </div>
    </div>
</div>
