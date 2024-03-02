<div>
    @if ($transaksi)
        <input type="checkbox" id="modalStatus{{ $transaksi->id }}" class="modal-toggle" @checked($show) />
        <div class="modal " role="dialog">
            <div class="modal-box max-w-xs">
                <h3 class="font-bold text-lg">Ganti status transaksi!</h3>
                <div class="py-4 space-y-2">
                    @foreach ($statusList as $status => $item)
                        <button @class([
                            'btn btn-block capitalize',
                            'btn-primary' => $transaksi->status == $status,
                        ])
                            wire:click="setNewStatus('{{ $status }}')">{{ $status }}</button>
                    @endforeach
                </div>
            </div>
            <label class="modal-backdrop" wire:click="$set('show', false)">Close</label>
        </div>
    @endif
</div>
