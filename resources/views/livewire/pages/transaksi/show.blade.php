<div>
    <input type="checkbox" id="my_card_6" class="modal-toggle" wire:model.live="show" />
    <div class="modal backdrop-blur-sm" role="dialog">
        <div class="card bg-base-100 w-full max-w-sm overflow-hidden">
            <div class="navbar border-b">
                <div class="navbar-start">
                    <label for="my_card_6" class="btn btn-circle btn-ghost">
                        <x-tabler-arrow-left />
                    </label>
                </div>
                <div class="navbar-center flex flex-col">
                    <div>ORDER STATUS</div>
                    <small class="opacity-75">#453245234</small>
                </div>
                <div class="navbar-end">
                </div>
            </div>
            <div class="card-body text-center space-y-8">
                <div class="rating gap-1 text-center justify-center">
                    <input type="radio" name="rating-3" class="icon-2 rounded-full bg-neutral" />
                    <input type="radio" name="rating-3" class="icon-2 rounded-full bg-neutral" />
                    <input type="radio" name="rating-3" class="icon-2 rounded-full bg-neutral"
                        @checked(true) />
                    <input type="radio" name="rating-3" class="icon-2 rounded-full bg-neutral" />
                </div>
                <img src="{{ url('illustration/loading_box.svg') }}" alt="" class="w-4/6 mx-auto">
                <div class="py-4">
                    <h3 class="font-bold">SUDAH SELESAI...</h3>
                    <div class="text-sm opacity-50">Order anda telah selasai 23 menit lalu. Laundy anda sudah
                        siap untuk
                        diambil.
                    </div>
                </div>
            </div>
            <div class="card-actions p-2 border-t">
                <label for="my_card_6" class="btn btn-ghost btn-block btn-sm">DETAIL TRANSAKSI</label>
            </div>
        </div>
    </div>
</div>
