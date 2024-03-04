<div>
    <input type="checkbox" id="addItem" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-lg" wire:submit="simpan">
            <div class="divider">
                <h3 class="font-semibold text-xl">Menambahkan item</h3>
            </div>
            <div class="py-4 space-y-2">
                <select type="text"
                    class="select select-bordered flex gap-2 items-center @error('paket_id') select-error @enderror w-full"
                    wire:model.live="paket_id">
                    <option value="">Pilih paket</option>
                    @foreach ($pakets as $pktid => $pktname)
                        <option value="{{ $pktid }}">{{ $pktname }}</option>
                    @endforeach
                </select>
                <label class="input input-bordered flex gap-2 items-center @error('qty') input-error @enderror">
                    <input type="text" class="grow" wire:model.live="qty" placeholder="Kuantitas">
                    @isset($paket_id)
                        @php
                            $paket = \App\Models\Paket::find($paket_id);
                        @endphp
                        <span>{{ $paket->rupiah }}/{{ $paket->satuan }}</span>
                    @endisset
                </label>
            </div>
            <div class="modal-action justify-between">
                <label for="addItem" class="btn">Close</label>
                <button class="btn btn-primary">
                    <x-tabler-check class="icon-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
