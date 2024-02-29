<div class="card card-compact border-2 w-full h-full">
    <div class="card-body text-center space-y-8 justify-evenly">
        <img src="{{ url($steps[$step]['illustration']) }}" alt="" class="h-36 mx-auto">
        <div>
            <h3 class="font-bold uppercase">{{ $steps[$step]['title'] }}...</h3>
            <div class="text-xs opacity-50">
                {{ $steps[$step]['keterangan'] }} {{ $step }}
            </div>
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
