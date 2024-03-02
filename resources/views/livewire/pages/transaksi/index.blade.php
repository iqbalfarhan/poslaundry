<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between gap-2">
        <div class="flex gap-1 grow">
            <input type="text" class="input input-bordered" placeholder="Pencarian" wire:model.live="cari">
        </div>
        <label class="input input-bordered flex items-center gap-1">
            @foreach ($statuses as $sts => $opt)
                <button @class([
                    'btn btn-sm capitalize',
                    'btn-primary' => $status == $opt['as'],
                ])
                    wire:click="$set('status', '{{ $opt['as'] }}')">{{ $opt['as'] }}</button>
            @endforeach
        </label>
        <a href="{{ route('transaksi.create') }}" class="btn input-bordered" wire:navigate>
            <x-tabler-calendar class="icon-5" />
            Buat transaksi
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-5">
        @forelse ($datas as $data)
            @livewire('pages.transaksi.card', ['data' => $data, 'color' => $data->color], key($data->id))
        @empty
            <div class="col-span-full">
                @livewire('partial.nocontent')
            </div>
        @endforelse
    </div>

    @livewire('pages.transaksi.show')
    @livewire('pages.transaksi.detail')
</div>
