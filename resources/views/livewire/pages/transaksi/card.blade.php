<div class="card card-compact w-full border-2 border-success/15 bg-success/10">
    <div class="card-body space-y-4 border-b-2 border-success/15">
        <div class="flex justify-between">
            <div class="font-semibold text-xl flex flex-col items-start">
                <span>Rp. 75.000</span>
                <small class="text-xs opacity-75">Berat laundry 7.5 Kg</small>
            </div>
            <button class="btn btn-circle btn-ghost bg-success/30" wire:click="$dispatch('detailTransaksi')">
                <x-tabler-ticket />
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="flex justify-between">
            <h3>Iqbal farhan</h3>
            <div>23 Feb 2023</div>
        </div>
    </div>
</div>
